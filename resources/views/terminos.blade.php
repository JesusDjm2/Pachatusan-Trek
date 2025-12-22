@extends('layouts.admines')
@section('contenido')
    <section class="banner-about">
        <div class="banner-content">
            <h1>Términos y Condiciones Pachatusantrek</h1>
            <a href="#empezar" class="scroll-down-btn">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>

    <section id="empezar" class="pt-1 bg-light">
        <div class="container bg-white">
            <div class="row mb-4">
                <div class="col text-justify p-4">
                    <h2 class="fw-bold pt-4">Términos y Condiciones</h2>
                    <p class="text-muted">
                        Agradecemos por haber escogido Pachatusantrek. Te pedimos leas los siguientes términos y condiciones
                        de viaje a fin de establecer las pautas en las que trabajaremos. Una vez recibido tu pedido y
                        depósito
                        estaremos firmando un contrato bajo las siguientes condiciones.
                    </p>

                    <h4 class="fw-semibold mb-3">Reservas y Confirmaciones</h4>

                    <p>
                        Pachatusantrek requiere de la siguiente información a fin de proceder con la reserva y confirmación
                        de tus vacaciones. Esta información es estrictamente confidencial y no será compartida, excepto
                        cuando
                        sea necesaria para salvaguardar tu seguridad personal o salud (alergias, medicaciones, restricciones
                        alimenticias, entre otros).
                    </p>
                    <p class="font-weight-bold">Datos necesarios: </p>

                    <ul class="ps-3" style="text-align: left;list-style: disc; margin-left: 2em;">
                        <li>Nombre completo (como aparece en el pasaporte)</li>
                        <li>Nacionalidad</li>
                        <li>Número de pasaporte</li>
                        <li>Edad</li>
                        <li>Ocupación</li>
                        <li>
                            Restricciones alimenticias (alergias, vegetarianos, dietas especiales,
                            restricciones)
                        </li>
                        <li>
                            Restricciones de medicinas
                            (por favor especificar si cuentas con medicación actual o intervenciones recientes)
                        </li>
                        <li>Alergias</li>
                        <li>Dirección, e-mail y teléfonos de casa y de emergencia</li>
                    </ul>

                    <p class="mt-3">
                        Te enviaremos un formulario para completar toda esta información.
                    </p>
                    <h4 class="fw-semibold mb-3">Pagos y Depósitos</h4>
                    <p>Luego de haber hecho tu reserva, Pachatusantrek te enviará una respuesta
                        con la confirmación de tu viaje, la misma que garantiza que los servicios
                        serán provistos de acuerdo a lo contratado.
                        Te solicitaremos un depósito inicial del 30% del precio total del programa,
                        luego de enviada la confirmación.<br>
                        Este depósito no es reembolsable en caso de cancelación por tu parte.
                        El balance del 70% deberá ser pagado 60 días antes del inicio del viaje con
                        nosotros. <br>
                        En caso se hagan reservas dentro de los 60 días antes de la llegada,
                        Pachatusantrek solicitará el pago total del viaje al momento de enviada la
                        confirmación. </p>
                    <p>Tenemos varias formas de pagos: </p>
                    <ul class="ps-3" style="text-align: left;list-style: disc; margin-left: 2em;">
                        <li>Visa (enviaremos un enlace para realizar el pago en línea)</li>
                        <li>
                            Mastercard
                            <span class="text-muted">(requiere copia del pasaporte y ambos lados de la tarjeta —
                                legible)</span>
                        </li>
                        <li>
                            American Express
                            <span class="text-muted">(requiere copia del pasaporte y ambos lados de la tarjeta —
                                legible)</span>
                        </li>
                        <li>PayPal</li>
                        <li>
                            Depósito bancario a la cuenta de Pachatusantrek
                            <span class="text-muted">(contáctanos para obtener la información)</span>
                        </li>
                        <li>
                            Giro vía Western Union
                            <span class="text-muted">(contáctanos para obtener los datos requeridos)</span>
                        </li>
                    </ul>
                    <p>Pachatusantrek NO asumirá los gastos bancarios originados por el envío de
                        giros o depósitos, éstos deberán ser chequeados con el país de origen </p>
                    <p><strong>Cancelaciones </strong> <br>
                        Pachatusantrek se reserva el derecho de cancelar algún viaje en los
                        siguientes casos:
                    </p>
                    <ul class="ps-3" style="text-align: left;list-style: disc; margin-left: 2em;">
                        <li>Cuando el cliente no haya cancelado el pago total de su viaje a los 60
                            días antes de su llegada, no hay reembolso por el depósito realizado. </li>
                        <li>Causas ajenas a nuestras operaciones que imposibiliten el desarrollo
                            de las mismas (huelgas, paros, cancelaciones de vuelos, condiciones
                            climáticas, sobreventas de hoteles o líneas aéreas) en estos términos
                            propondremos soluciones posibles a fin de operar el programa
                            ofrecido. Los gastos extras originados por alguna de estas causas
                            adicionales al programa, no serán cubiertos por Pachatusantrek.
                        </li>
                    </ul>
                    <p>Si cancelas tu viaje, debes de notificarnos por escrito, toma en cuenta que
                        el depósito requerido al momento de la confirmación no es reembolsable.
                        Esta cancelación debe llegar por escrito indicando el motivo de la anulación.
                        En caso de cancelaciones dentro de los 60 días del inicio de viaje, las
                        penalidades serán las siguientes: </p>
                    <table class="table table-bordered border-secondary-subtle">
                        <thead class="table-light">
                            <tr>
                                <th>Anticipación</th>
                                <th>Penalidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Antes de los 60 días</td>
                                <td>Se retiene el depósito</td>
                            </tr>
                            <tr>
                                <td>De 60 a 31 días</td>
                                <td>50% del costo del viaje</td>
                            </tr>
                            <tr>
                                <td>De 30 a 16 días</td>
                                <td>75% del costo del viaje</td>
                            </tr>
                            <tr>
                                <td>15 días antes de la llegada</td>
                                <td>100% del costo del viaje</td>
                            </tr>
                        </tbody>
                    </table>
                    <p><strong>Servicios incluidos</strong><br>
                        Pachatusantrek incluye los servicios detallados en cada uno de sus
                        programas y se compromete a brindarlos en su integridad.
                        Si tu viaje incluye acomodación, los desayunos están incluidos (variando de
                        acuerdo a la categoría del hotel). El precio del alojamiento no incluye el
                        18% de impuestos aplicable a residentes en Perú, para hacerlo efectivo se
                        deberá de enseñar el pasaporte original junto con el ORIGINAL de la tarjeta
                        de migraciones, caso contrario dicho porcentaje podrá ser cobrado por el
                        hotel sobre la tarifa publicada.
                        Igualmente para pasajeros no residentes, requerimos siempre la copia del
                        pasaporte y tarjeta de migraciones para poder complementar la
                        exoneración del impuesto del 18%, aplicable a residentes en Perú. </p>
                    <p><strong>Servicios no incluidos</strong><br>
                    </p>
                    <ul class="ps-3" style="text-align: left;list-style: disc; margin-left: 2em;">
                        <li>Impuestos de aeropuerto (nacional e internacional)</li>
                        <li>Tickets aéreos nacionales o internacionales no solicitados a Pachatusantrek</li>
                        <li>Pago de exceso de equipaje</li>
                        <li>Visitas y actividades no programadas</li>
                        <li>Bebidas alcohólicas, botellas con agua y rehidratantes</li>
                        <li>Comidas no detalladas</li>
                        <li>Propinas (opcional) al personal</li>
                        <li>Lavandería</li>
                        <li>Seguro de viaje</li>
                        <li>Gastos extras originados por causas ajenas a la operación de Pachatusantrek</li>
                    </ul>
                    <h4>Seguros – Riesgos de viaje </h4>
                    <p>Muchas de las caminatas que Pachatusantrek ofrece requieren de buen
                        estado físico y de salud (por favor lee con cuidado las indicaciones en cada
                        programa), incluyendo ciertos riesgos potenciales durante su desarrollo
                        (daños a su persona, accidentes involuntarios, parálisis, muerte).
                        Debemos entender que dichos riesgos potenciales son parte de este tipo de
                        actividades, por lo que te sugerimos tomar las precauciones necesarias al
                        momento de elegir una caminata.<br><br>
                        Debes de estar seguro de tus limitaciones y tomar en cuenta tu estado
                        físico y de salud, ya que al tomar una de nuestras caminatas estás
                        considerando que estos riesgos, arriba mencionados puedan suceder, por lo
                        que Pachatusantrek queda excluido de cualquier responsabilidad relacionado
                        a las condiciones de cada caminante.<br><br>
                        Es por ello que sugerimos siempre brindar la información completa sobre tu
                        estado actual de salud y condiciones médicas y alimenticias.
                        Pachatusantrek está comprometido con brindarte asistencia de primeros
                        auxilio inmediata, ya que nuestros guías cuentan con entrenamiento,
                        capacidad y equipo adecuado para hacerlo, pero debes entender que sólo
                        son primeros auxilios, no una intervención médica.
                        Nuestros guías, en conjunto con los caminantes decidirán las evacuaciones,
                        para lo cual Pachatusantrek arreglará la mejor forma de realizarla a fin de
                        salvaguardar siempre tu integridad física.
                        Los costos que esta evacuación genere, como transporte, alojamiento extra,
                        gastos hospitalarios, médicos, cambios del programa, gastos extras a partir
                        de la evacuación, serán cubiertos única y exclusivamente por el caminante
                        evacuado.<br><br>
                        Por favor llena con mucho cuidado y de forma completa nuestro formulario
                        sobre tu salud física y médica, a fin de poder contar con la mayor
                        información posible sobre ti.
                        Te recomendamos tomar una póliza de seguros que cubra, accidentes,
                        daños, evacuaciones de emergencia, pérdida de equipaje, cambios de
                        itinerarios, pérdida de conexiones. Pregunta por nuestras propuestas
                        Cualquier gasto extra originado por cambios o modificaciones en el
                        programa debido a causas externas como: cancelaciones y retrasos de
                        vuelos, enfermedad, retrasos por mal tiempo, huelgas, desastres naturales,
                        o cualquier tipo de causas ajenas a nuestras operaciones, serán cubiertas
                        por el visitante.
                        Pachatusantrek podrá proporcionar los documentos necesarios para los
                        reclamos con tu compañía de seguros, siempre que éstos sean factibles de
                        conseguir por parte de nuestros proveedores.
                    </p>
                    <h4>Responsabilidades </h4>
                    <p>Pachatusantrek opera directamente las caminatas, contando con equipo y
                        personal capacitado para el buen desarrollo de las mismas, a su vez
                        también subcontrata los servicios de alojamiento, restaurantes, aerolíneas y
                        otras terceras partes, los mismos que han sido calificados con anticipación,
                        cubriendo los estándares de calidad que Pachatusantrek desea brindar a sus
                        clientes. Sin embargo estos proveedores son independientes, no teniendo
                        Pachatusantrek un control directo sobre ellos.<br><br>
                        Pachatusantrek no puede asumir algún problema generado por estos
                        proveedores, como pérdida de equipajes, retrasos, daños, etc, pero podrá
                        intermediar a favor de nuestros clientes.
                        El pago de la reservación de nuestros programas aprueba los términos y
                        condiciones detallados y cubre nuestros servicios y a todos los participantes
                        de los mismos. </p>
                </div>
            </div>
        </div>
    </section>
@endsection
