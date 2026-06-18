<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Throwable;

class RecaptchaService
{
    /**
     * Verify a Google reCAPTCHA v3 token against the configured secret key.
     *
     * Fails open (returns true) when the secret key isn't configured or when
     * Google's verification endpoint is unreachable, so an outage on Google's
     * side never blocks legitimate visitors from submitting the public forms.
     */
    public static function verify(?string $token, float $minScore = 0.5): bool
    {
        if (empty(config('recaptcha.api_secret_key'))) {
            return true;
        }

        if (empty($token)) {
            return false;
        }

        try {
            $result = app('recaptcha')->validate($token);
        } catch (Throwable $e) {
            Log::warning('reCAPTCHA verification request failed: ' . $e->getMessage());

            return true;
        }

        if (!is_array($result)) {
            return (bool) $result;
        }

        if (empty($result['success'])) {
            Log::info('reCAPTCHA rejected a submission', ['result' => $result]);

            return false;
        }

        $score = $result['score'] ?? 1;

        if ($score < $minScore) {
            Log::info('reCAPTCHA low score submission', ['score' => $score]);

            return false;
        }

        return true;
    }
}
