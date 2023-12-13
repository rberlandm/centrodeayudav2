<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">

        <img src="https://www.videlayasociados.cl/wp-content/uploads/2015/09/Fza-Armadas-.jpg" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>FUERZAS ARMADAS</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">SALUD INTEGRAL PLAN FAMILIAR (FFAA) [Código 99] <span> | </span></h5>

        <div class="table-responsive mb-3">
            <table class="table table-bordered table-light table-condensed table align-middle">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">BENEFICIO</th>
                        <th scope="col">DETALLE</th>
                        <th scope="col">MONTO MÁXIMO POR EVENTO ($)</th>
                        <th scope="col">MÁXIMO DE EVENTOS AL AÑO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="4">CLINICA DOMICILIARIA</td>
                        <td> Visita medico a Domicilio</td>
                        <td>100%</td>
                        <td>4 Evento</td>
                    </tr>
                    <tr>
                        <td>Orientación medica telefónica </td>
                        <td>100%</td>
                        <td>SIN LIMITE</td>
                    </tr>
                    <tr>
                        <td>Traslado en caso de Urgencia Medica</td>
                        <td>100%</td>
                        <td>3 Evento</td>
                    </tr>
                    <tr>
                        <td>Toma de Examenes : Sangre, Orina</td>
                        <td>100%</td>
                        <td>2 Evento</td>
                    </tr>


                    <tr>
                        <td rowspan="6">ESPECIALIDADES</td>
                        <td>Consulta Medico General </td>
                        <td>100%</td>
                        <td>3 Eventos</td>
                    </tr>
                    <tr>
                        <td>Consulta Traumatologia </td>
                        <td>100%</td>
                        <td>2 Eventos</td>
                    </tr>
                    <tr>
                        <td>Consulta Ginecologia</td>
                        <td>100%</td>
                        <td>1 Eventos</td>
                    </tr>
                    <tr>
                        <td>Consulta Urologia</td>
                        <td>100%</td>
                        <td>1 Eventos</td>
                    </tr>
                    <tr>
                        <td>Consulta Oftalmologia</td>
                        <td>100%</td>
                        <td>2 Eventos</td>
                    </tr>
                    <tr>
                        <td>Consulta Diabetologo (Disponibilidad medica)</td>
                        <td>100%</td>
                        <td>2 Eventos</td>
                    </tr>


                    <tr>
                        <td rowspan="5">URGENCIA DENTAL </td>
                        <td>Exámenes clinicos que deriven de Urgencia</td>
                        <td>100%</td>
                        <td>3 Evento</td>
                    </tr>
                    <tr>
                        <td>Profilaxis que deriven de Urgencia</td>
                        <td>100%</td>
                        <td>3 Evento</td>
                    </tr>
                    <tr>
                        <td>Trepanación que deriven de Urgencia</td>
                        <td>100%</td>
                        <td>3 Evento</td>
                    </tr>
                    <tr>
                        <td>Extracciones Simples que deriven de Urgencia</td>
                        <td>100%</td>
                        <td>3 Evento</td>
                    </tr>
                    <tr>
                        <td>Resina Simple hasta dos caras (Tapaduras) que Derivan a Urgencia</td>
                        <td>100%</td>
                        <td>3 Evento</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5 class="card-title ms-3">Asociacion Gremial Nacional de Pensionados de las FF.AA- Carab. y Montepios <span> | </span></h5>

        <div class="table-responsive mb-3">
            <table id="ffaa" class="table table-bordered table-light table-condensed table align-middle table-hover">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">N#</th>
                        <th scope="col">RUT</th>
                        <th scope="col">DV</th>
                        <th scope="col">APELIIDOS</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">MONTO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>8231799</td>
                        <td>6</td>
                        <td>AREVALO DIAZ</td>
                        <td>CARMEN GLORIA  </td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>4154569</td>
                        <td>0</td>
                        <td>AGUIRRE TORRES</td>
                        <td>ANIBAL </td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>6079233</td>
                        <td>K</td>
                        <td>CASTILLO ESPINOZA</td>
                        <td>NERY DEL CARMEN</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>6403764</td>
                        <td>1</td>
                        <td>CERECEDA SERON</td>
                        <td>CESAR ISIDRO</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>5378874</td>
                        <td>2</td>
                        <td>CUEVAS LILLO</td>
                        <td>JUAN ZACARIAS</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>4138973</td>
                        <td>7</td>
                        <td>FERNANDEZ SALINAS</td>
                        <td>FREASIA DEL CARMEN</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>4143017</td>
                        <td>6</td>
                        <td>FERRUZOLA MATURANA</td>
                        <td>ROSANA DEL CARMEN</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>6876325</td>
                        <td>8</td>
                        <td>FLORES ALVIAL</td>
                        <td>BETSABE </td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>7517356</td>
                        <td>3</td>
                        <td>FOHL HERNANDEZ </td>
                        <td>VICTOR</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>7268976</td>
                        <td>3</td>
                        <td>FUENTEALBA TORRES</td>
                        <td>JORGE IVAN  </td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>2448181</td>
                        <td>6</td>
                        <td>GOMEZ OYARZUN</td>
                        <td>VICTOR ROBERTO</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>6795740</td>
                        <td>7</td>
                        <td>HUINE SANCHEZ</td>
                        <td>SYLVIA INES OK</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>5390104</td>
                        <td>2</td>
                        <td>MARIN BERRIOS</td>
                        <td>MARIANO</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>6291736</td>
                        <td>9</td>
                        <td>MUÑOZ CARRANZA</td>
                        <td>MARIA ANGELICA </td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>7710298</td>
                        <td>1</td>
                        <td>MEDINA DIAZ</td>
                        <td>SOLANGE</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>10396247</td>
                        <td>1</td>
                        <td>MAISTEROW FUENTES</td>
                        <td>NICOLAS</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>18606532</td>
                        <td>8</td>
                        <td>NOVOA YAÑEZ</td>
                        <td>CLAUDIA ALEJANDRA</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>10169593</td>
                        <td>K</td>
                        <td>OLAVARRÍA ESPINOZA</td>
                        <td>SERGIO FERNANDO</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>4648989</td>
                        <td>6</td>
                        <td>RETAMAL ALDANA</td>
                        <td>JORGE</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>6914433</td>
                        <td>0</td>
                        <td>ROSEMBERG PEREZ</td>
                        <td>MARCELO   </td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>6338625</td>
                        <td>1</td>
                        <td>SUAREZ DONOSO</td>
                        <td>LUIS RENÉ</td>
                        <td>$ 7.500</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>6051021</td>
                        <td>0</td>
                        <td>VERDUGO SALINAS</td>
                        <td>CARLOS HERNAN</td>
                        <td>$ 7.500</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <script>
        new DataTable('#ffaa');
    </script>
</main>



<?php incluirTemplate('footer'); ?>