<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telzir</title>
    <link rel="stylesheet"  href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    <div class="overlay">
        <header>
            <div class="container">
                <nav>
                    <span class="title"><a href="#banner">Telzir</a></span>

                    <ul class="menu">
                        <li><a href="#plans" selected="selected">Planos</a></li>
                        <li><a href="#consult">Simule</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="banner" class="background-image">
            <div class="container">
                <div class="banner-content">
                    <div class="banner-title">Venha ligar para todos com Telzir</div>

                    <div class="banner-text">
                        Com os planos da telzir você paga menos pra falar mais.
                    </div>

                    <a class="banner-button" href="#plans">Conheça nossos planos</a>
                </div>
            </div>
        </section>

        <section id="plans">
            <div class="container">
                <div class="section-content">
                    <div class="section-title">Nossos Planos</div>

                    <div class="plans-widget-area">
                        @foreach ($plans as $plan)
                            <div class="plans-widget">
                                <div class="plans-widget-name">{{$plan->name}}</div>

                                <div class="plans-widget-description">{{$plan->description}}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="consult" class="background-image">
            <div class="container">
                <div class="section-content">
                    <div class="section-title">Simule aqui</div>

                    <div class="consult-form">
                        <div>
                            <div class="inputArea">
                                <div class="input">
                                    <label for="stateFrom">Estado de origem:</label>
                                    <select name="stateFrom" id="stateFrom">
                                        <option value="0"></option>

                                        @foreach ($states as $state)
                                            <option value="{{$state->id}}">{{$state->getFormatedStateName()}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input">
                                    <label for="stateTo">Estado de destino:</label>
                                    <select name="stateTo" id="stateTo">
                                        <option value="0"></option>

                                        @foreach ($states as $state)
                                            <option value="{{$state->id}}">{{$state->getFormatedStateName()}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="inputArea">
                                <div class="input">
                                    <label for="cityFrom">Cidade de origem:</label>
                                    <select name="cityFrom" id="cityFrom"></select>
                                </div>

                                <div class="input">
                                    <label for="cityTo">Cidade de destino:</label>
                                    <select name="cityTo" id="cityTo"></select>
                                </div>
                            </div>

                            <div class="inputArea">
                                <div class="input">
                                    <label for="select-plan">Plano:</label>
                                    <select name="select-plan" id="select-plan">
                                        <option value="0">Todos</option>

                                        @foreach ($plans as $plan)
                                            <option value="{{$plan->id}}">{{$plan->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input">
                                    <label for="minutes">Minutos:</label>
                                    <input type="number" name="minutes" id="minutes" value="0">
                                </div>
                            </div>

                            <div class="inputArea">
                                <button id="sendConsult">Simular</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="modal-overlay">
        <div class="modal" id="modal"></div>
    </div>

    <div id="toast">Test</div>

    <input type="hidden" id="apiUrl" value="{{$apiUrl}}">

    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
