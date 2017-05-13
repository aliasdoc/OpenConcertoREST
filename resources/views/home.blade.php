@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>
        Documentation
        <small>Version 0.5 (alpha)</small>
    </h1>
@stop

@section('content')
    <section id="introduction">
        <h2 class="page-header"><a href="#introduction">Introduction</a></h2>
        <p class="lead">
            <b>OpenConcerto</b> REST est un portail qui vous permet de créer des accès distant vers la lase de donnée du CRM OpenConcerto
            de manière sécurisée et qui vous offre la possibilité de créer vos propres outils de gestion.
        </p>

        <div class="callout callout-danger lead">
            <h4>Attention</h4>
            <p>Cette application n'est pas utilisable en l'état en production (il s'agit d'une version alpha), elle n'est pas entièrement sécurisée et beaucoup de travail reste à faire. L'interface graphique est quand à elle minimaliste et quelques bugs CSS sont présent. Un minimum de connaissance en programmation est requis pour l'utiliser.</p>
        </div>

        <h2 class="page-header"><a href="#utilisation">Utilisation</a></h2>
        <p class="lead">
            L'api est sécurisée par un accès OAuth2, pour celà vous devez donc commencer par utiliser le client généré lors de l'installation ou créer le votre,
            le menu Clients OAuth2 sur le côté vous mène vers la liste des clients, un client est déjà présent, il a été généré lors de l'installation.
        </p>

        <p>
            A chaque client est affecté une société (par défaut: ILM Informatique), pour l'instant pas de possibilité d'utiliser plusieurs sociétés par client.
        </p>

        <p>
            Renseignez sur votre client OAuth2 les crédentials comme ceci:
        </p>

        <ul>
            <li><code>grant_type = client_credentials</code></li>
            <li><code>client_id = ...</code></li>
            <li><code>client_secret = ...</code></li>
        </ul>

        <p>
            quelques endpoints sont déjà créés:
        </p>

        <ul>
            <li>clients</li>
            <li>contacts</li>
            <li>devis</li>
            <li>commandes client</li>
            <li>affaires</li>
        </ul>

        <p>
            Reste à venir...
        </p>
    </section>
@stop