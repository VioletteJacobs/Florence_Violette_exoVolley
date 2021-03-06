<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volley</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- greensock -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

</head>
<body>
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')

    <script  src="{{  asset('js/app.js') }}"></script>
</body>
</html>

{{-- laravel_foreing_key_exo_5 (one to many)
Pour un club de voleyball il faut réaliser un site internet, la seule chose qu'on sait c'est que le client veut pouvoir créer des équipes et les modifier
pour les informations chaque équipes a un nom de club, une ville qu'elle représente , un pays et un maximum de joueur possible dans leur équipe et par role(2 avant, 2 centraux, 2 arriere, 3remplacants)..
exemple : Les Fifous , Belgique, 7
Et bien sur les joueurs doivent pouvoir etre rajoutés dans la plateforme
ils ont : un nom , prénom,age, téléphone,email, un genre, un pays d'origine,role dans une partie ( avant, central, arrière, remplaçant ), un equipe_id et une photo_id
Si l'équipe n'a plus de place dans un poste alors le joueur ne peut pas être rajouter et on reçoit un message pour nous en prévenir.( voir https://laravel.com/docs/8.x/responses#redirecting-with-flashed-session-data )

Il faut une page pour afficher toutes les équipes
nom , ville , nombre de joueurs sur/maximum de place
exemple :
Les fifous , anderlecht 5/7 et un button voir
dans le show de chaque équipes on peut revoir le nom de l'quipe la ville le nombre de joueurs sur/maximum de place et tous les joueurs qui en font partis juste leur nom prénom et leur role et un button voir qui nous ramene sur le show du joueur pour y voir TOUTES ses informations et meme son équipe. ( utiliser les methode dans les modeles pour récupérer cette information.)

Il faut une page pour afficher tous les joueurs
Nom Prénom Nom d'équipe button pour voir le show du joueur
le nom de l'équipe du joueur est cliquable également pour aller voir le show de l'équipe avec toutes les informations !

Une page Dashboard avec :
1 section ( 2 équipes remplies au hasard )
2 section ( 4 joueurs sans équipes au hasard )
3 section ( 4 joueurs avec équipe )
4 section ( 2 équipes non remplies au hasard )
5 section ( les equipes d'europes )
6 section ( les équipes hors europes )
7 section ( les joueurs qui représente leur pays( meme pays dorigine que l'équipe dans la quelle ils jouent )
8 section 5 joueuses au hasard qui ont une équipe !
9 section 5 joueurs homme et qui ont une équipe ! --}}