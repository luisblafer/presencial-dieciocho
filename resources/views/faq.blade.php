@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row">
                <div class="col">
                    <h2>Preguntas frecuentes</h2>
                    <!-- <img src="../img/rueda_icono.png" alt="logo" width="150" height="150" class="mb-5"> -->
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <!-- TODO: Hay que hacer un foreach que repita el bloque CARD -->
                    <!-- TODO: Cada bloque CARD tiene que representar a 1 tópico -->
                    <div class="card mb-3">
                        <!-- TODO: El Header debería ser el campo de texto del tópico -->
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <!-- Recorro el array y voy mostrando en el acordeón cada una de las preguntas y respuestas por id a través de los getters -->
                            <!-- TODO: El id del accordion debe responder al id del tópico -->
                            <div class="accordion" id="accordionFAQ">
                                <!-- TODO: No se pueden recorrer mas todas las preguntas, solo las que pertenecen a un topico especifico -->
                                <?php foreach ($preguntas as $key => $pregunta) : ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?= $key ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link text-reset" type="button" data-toggle="collapse" data-target="#collapse<?= $key ?>" aria-expanded="true" aria-controls="collapse<?= $key ?>">
                                                <?= $pregunta['pregunta'] ?>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse<?= $key ?>" class="collapse" aria-labelledby="heading<?= $key ?>" data-parent="#accordionFAQ">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <?= $pregunta['respuesta'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>
@endsection
