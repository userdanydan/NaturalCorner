

<span class="cmbx-12">Natural Corner, l’App au service du bio</span><span class="frenchb-nbsp"><span class="cmbx-12"> </span></span><span class="cmbx-12">:</span>


## <a id="x1-1000"></a>Table des matières

<div class="tableofcontents"><span class="chapterToc">1 [Introduction](#x1-20001)</span>
<span class="partToc">[Méthodologie et architecture](#x1-30001)</span>
<span class="chapterToc">2 [Méthodologie](#x1-40002)</span>
 <span class="sectionToc">2.1 [UP simplifié](#x1-50002.1)</span>
<span class="chapterToc">3 [Architecture](#x1-60003)</span>
 <span class="sectionToc">3.1 [Choix technologiques](#x1-70003.1)</span>
  <span class="subsectionToc">3.1.1 [Choix du langage](#x1-80003.1.1)</span>
  <span class="subsectionToc">3.1.2 [Base de données](#x1-130003.1.2)</span>
 <span class="sectionToc">3.2 [Framework](#x1-150003.2)</span>
  <span class="subsectionToc">3.2.1 [MVC](#x1-160003.2.1)</span>
  <span class="subsectionToc">3.2.2 [Framework ”fait maison”](#x1-170003.2.2)</span>
 <span class="sectionToc">3.3 [Outils logiciels](#x1-180003.3)</span>
<span class="partToc">[Fonctionnalités de l’application Natural Corner](#x1-190003.3)</span>
<span class="chapterToc">4 [Expression initiale des besoins](#x1-200004)</span>
 <span class="sectionToc">4.1 [Vision du projet](#x1-210004.1)</span>
 <span class="sectionToc">4.2 [Analyse métier](#x1-240004.2)</span>
  <span class="subsectionToc">4.2.1 [Natural Corner](#x1-250004.2.1)</span>
  <span class="subsectionToc">4.2.2 [Logique métier](#x1-260004.2.2)</span>
 <span class="sectionToc">4.3 [Exigences fonctionnelles](#x1-270004.3)</span>
 <span class="sectionToc">4.4 [Exigences non fonctionnelles](#x1-350004.4)</span>
 <span class="sectionToc">4.5 [Exigences de performance](#x1-380004.5)</span>
 <span class="sectionToc">4.6 [Contraintes de conception](#x1-390004.6)</span>
<span class="chapterToc">5 [Cas d’utilisation](#x1-440005)</span>
 <span class="sectionToc">5.1 [Use case des utilisateurs](#x1-450005.1)</span>
 <span class="sectionToc">5.2 [Use case des employés](#x1-460005.2)</span>
 <span class="sectionToc">5.3 [Use case secondaire](#x1-470005.3)</span>
  <span class="subsectionToc">5.3.1 [API](#x1-480005.3.1)</span>
 <span class="sectionToc">5.4 [Classement des cas d’utilisation et planification du projet en itération](#x1-490005.4)</span>
<span class="chapterToc">6 [Maquette](#x1-500006)</span>
 <span class="sectionToc">6.1 [Captures d’écran](#x1-510006.1)</span>
<span class="partToc">[Spécifications détaillées des exigences](#x1-520006.1)</span>
<span class="chapterToc">7 [Descriptions des cas d’utilisation et diagrammes de séquence système](#x1-530007)</span>
 <span class="sectionToc">7.1 [UC Créer son compte client](#x1-540007.1)</span>
  <span class="subsectionToc">7.1.1 [Description](#x1-550007.1.1)</span>
  <span class="subsectionToc">7.1.2 [Diagramme de séquence système](#x1-640007.1.2)</span>
 <span class="sectionToc">7.2 [UC Gérer son compte client](#x1-650007.2)</span>
  <span class="subsectionToc">7.2.1 [Description](#x1-660007.2.1)</span>
  <span class="subsectionToc">7.2.2 [Diagramme de séquence système](#x1-760007.2.2)</span>
 <span class="sectionToc">7.3 [UC Recherche des produits](#x1-770007.3)</span>
  <span class="subsectionToc">7.3.1 [Description](#x1-780007.3.1)</span>
  <span class="subsectionToc">7.3.2 [Diagramme de séquence système](#x1-870007.3.2)</span>
 <span class="sectionToc">7.4 [UC Gérer son panier](#x1-880007.4)</span>
  <span class="subsectionToc">7.4.1 [Description](#x1-890007.4.1)</span>
  <span class="subsectionToc">7.4.2 [Diagramme de séquence système](#x1-980007.4.2)</span>
 <span class="sectionToc">7.5 [UC Commander](#x1-990007.5)</span>
  <span class="subsectionToc">7.5.1 [Description](#x1-1000007.5.1)</span>
  <span class="subsectionToc">7.5.2 [Diagramme de séquence système](#x1-1080007.5.2)</span>
 <span class="sectionToc">7.6 [UC Maintenir le catalogue](#x1-1090007.6)</span>
  <span class="subsectionToc">7.6.1 [Description](#x1-1100007.6.1)</span>
  <span class="subsectionToc">7.6.2 [Diagramme de séquence système](#x1-1190007.6.2)</span>
<span class="partToc">[Classes d’analyse et base de données](#x1-1200007.6.2)</span>
<span class="chapterToc">8 [Conception objet des classes d’analyse](#x1-1210008)</span>
 <span class="sectionToc">8.1 [Classes d’analyse](#x1-1220008.1)</span>
  <span class="subsectionToc">8.1.1 [Identification des concepts du domaine](#x1-1230008.1.1)</span>
  <span class="subsectionToc">8.1.2 [Ajout des associations et des attributs](#x1-1240008.1.2)</span>
<span class="chapterToc">9 [Base de données](#x1-1250009)</span>
 <span class="sectionToc">9.1 [Conception](#x1-1260009.1)</span>
 <span class="sectionToc">9.2 [Modèle conceptuel de données (MCD)](#x1-1270009.2)</span>
 <span class="sectionToc">9.3 [Modèle logique de données (MLD)](#x1-1280009.3)</span>
 <span class="sectionToc">9.4 [Réflexions sur la conception de la base de données](#x1-1290009.4)</span>
<span class="partToc">[Réalisation des cas d’utilisation](#x1-1300009.4)</span>
<span class="chapterToc">10 [Conception et implémentation des UC](#x1-13100010)</span>
 <span class="sectionToc">10.1 [UC ”Créer son compte client” et ”Gérer son compte client”](#x1-13200010.1)</span>
  <span class="subsectionToc">10.1.1 [Diagramme des classes participantes (DCP)](#x1-13300010.1.1)</span>
  <span class="subsectionToc">10.1.2 [Diagramme de navigation <span class="footnote-mark"><sup class="textsuperscript">1</sup></span>](#x1-13700010.1.2)</span>
  <span class="subsectionToc">10.1.3 [Conception objet préliminaire](#x1-13800010.1.3)</span>
  <span class="subsectionToc">10.1.4 [Implémentation](#x1-14300010.1.4)</span>
  <span class="subsectionToc">10.1.5 [Difficultés rencontrées, réflexions et conclusions provisoires](#x1-14800010.1.5)</span>
  <span class="subsectionToc">10.1.6 [Première livraison du logiciel et feedback du client.](#x1-15000010.1.6)</span>
 <span class="sectionToc">10.2 [UC ”Recherche des produits”](#x1-15100010.2)</span>
  <span class="subsectionToc">10.2.1 [Diagramme des classes participantes (DCP)](#x1-15200010.2.1)</span>
  <span class="subsectionToc">10.2.2 [Diagramme de navigation](#x1-15500010.2.2)</span>
  <span class="subsectionToc">10.2.3 [Conception objet préliminaire](#x1-15600010.2.3)</span>
  <span class="subsectionToc">10.2.4 [Implémentation](#x1-16000010.2.4)</span>
  <span class="subsectionToc">10.2.5 [Difficultés rencontrées, réflexions et conclusions provisoires](#x1-16400010.2.5)</span>
 <span class="sectionToc">10.3 [UC ”Gérer son panier”](#x1-16500010.3)</span>
  <span class="subsectionToc">10.3.1 [Diagramme des classes participantes (DCP)](#x1-16600010.3.1)</span>
  <span class="subsectionToc">10.3.2 [Diagramme de navigation](#x1-16900010.3.2)</span>
  <span class="subsectionToc">10.3.3 [Conception objet préliminaire](#x1-17000010.3.3)</span>
  <span class="subsectionToc">10.3.4 [Conception objet détaillée](#x1-17200010.3.4)</span>
  <span class="subsectionToc">10.3.5 [Tests unitaires](#x1-17400010.3.5)</span>
  <span class="subsectionToc">10.3.6 [Code](#x1-17500010.3.6)</span>
  <span class="subsectionToc">10.3.7 [Difficultés rencontrées, réflexions et conclusions provisoires](#x1-17800010.3.7)</span>
 <span class="sectionToc">10.4 [UC ”Commander”](#x1-17900010.4)</span>
  <span class="subsectionToc">10.4.1 [Diagramme des classes participantes (DCP)](#x1-18000010.4.1)</span>
  <span class="subsectionToc">10.4.2 [Diagramme de navigation](#x1-18300010.4.2)</span>
  <span class="subsectionToc">10.4.3 [Conception objet préliminaire](#x1-18400010.4.3)</span>
  <span class="subsectionToc">10.4.4 [Conception objet détaillée](#x1-18600010.4.4)</span>
 <span class="sectionToc">10.5 [UC ”Maintenir catalogue”](#x1-18700010.5)</span>
  <span class="subsectionToc">10.5.1 [Diagramme des classes participantes (DCP)](#x1-18800010.5.1)</span>
  <span class="subsectionToc">10.5.2 [Diagramme de navigation](#x1-19100010.5.2)</span>
  <span class="subsectionToc">10.5.3 [Conception objet préliminaire](#x1-19200010.5.3)</span>
  <span class="subsectionToc">10.5.4 [Tests unitaires](#x1-19500010.5.4)</span>
  <span class="subsectionToc">10.5.5 [Code](#x1-19600010.5.5)</span>
<span class="chapterToc">11 [Création de l’API et utilisation de AngularJS](#x1-19900011)</span>
 <span class="sectionToc">11.1 [API REST](#x1-20000011.1)</span>
 <span class="sectionToc">11.2 [AngularJS](#x1-20100011.2)</span>
<span class="chapterToc">12 [Conclusion](#x1-20200012)</span>
<span class="chapterToc">[Bibliographie](#Q1-1-281)</span>
<span class="appendixToc">A [Dump du code MySQL généré par JMerisse (et corrigé manuellement)](#x1-204000A)</span>
<span class="appendixToc">B [Conventions pour les diagrammes de navigation](#x1-205000B)</span>
<span class="appendixToc">C [Créer les tests avec PHPUnit](#x1-207000C)</span>
<span class="appendixToc">D [Déployer une application en PHP sur Google App Engine](#x1-208000D)</span></div>

## <span class="titlemark">Chapitre 1</span>
<a id="x1-20001"></a>Introduction

Natural Corner est un magasin bio du centre ville ouvert depuis environ 7 ans et qui propose une large variété d’articles bio allant des légumes et fruits aux produits cosmétiques en passant par les laits aux amendes [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE2.html#fn1x1)<a id="x1-2001f1"></a>. Cette boutique bio jouit d’une jolie réputation et ne cesse d’améliorer son offre.

Lorsque j’ai eu une première entrevue avec le gérant du magasin Natural Corner, il m’a fait part de son envie de pouvoir un peu moderniser son magasin par le biais du numérique et proposer une nouvelle image résolument moderne à la clientèle. Je lui ai alors suggéré de créer une application web ou smartphone dans l’optique de l’écriture de mon travail de fin d’études. L’idée était que les clients aimeraient bénéficier du comfort d’une précommande en ligne avant d’aller récupérer leur panier. Enthousiasmé par cette ébauche de projet, je l’ai rapidement proposé comme sujet de mémoire.

Les deux raisons principales qui m’ont amené à choisir le sujet d’une application web pour la vente en ligne d’un magasin bio sont d’une part, d’un point de vue technique, mon désir d’approfondir le domaine du développement web, et d’autre part, mon intérêt pour ce nouveau marché des produits bio proposant des alternatives de consommation intéressantes et des opportunités indéniables au niveau commercial.

Avec de nouvelles technologies proposées, la programmation web semble être arrivée à une certaine maturité. Les services PaaS offrent aux developpeurs web des outils leur permettant de se passer d’une bonne partie de l’infrastructure et de sa configuration pour se concentrer sur le code et l’expérience des utilisateurs. Je perçois dans ces technologies la possibilité d’une très grande autonomie pour le développeur. Il est aussi intéressant de constater qu’une série de framework orienté web en langage javascript, aussi bien frontend que backend, innondent le marché (meteorjs, angularjs, nodejs, backbonejs,...) et qu’il s’agit sans doute d’un signe d’engouement pour ce type de programmation. La puissance croissante des moteurs javascript des navigateurs et la pile HTML5 proposant des services très nombreux, la possibilité d’être, à l’instar des applications Java, dans une certaine mesure “cross-plateforme”, et la nécessité de pouvoir offrir une expérience UI similaire sur les différents appareils (Android, IOS, Windows phone, ChromeBook, laptop) poussent les technologies web à s’améliorer sans cesse.

Dans un tel contexte, j’aimerais expérimenter un ensemble de choix de langages qui peuvent apporter une solution élégante à une question récurrente dans le développement des applications web. Comment envisager la création d’une application web qui pourra rester évolutive et “maintenable” lors d’une migration vers une application pour smartphone sous Android ou IOS<span class="frenchb-thinspace"> </span>? La réponse à cette question est en partie l’objet de mon TFE. La solution réside de le découplage du front-end et du back-end par l’intermédiaire d’un service web REST (qui envoie sous forme de requête http des objets au format JSON).

A ce jour le marché du bio répond à une forte demande. Bien qu’encore élitiste, ce marché semble grandir sans cesse, permettant aux consommateurs exigents quant à la qualité des produits et à l’impact écologique de leur mode de vie de consommer conformément à leurs principes. Etant personnellement attentif aux problèmes d’environnement, je vois dans le marché bio la possibilité d’une remise en question de notre mode de consommation sans entrer en contradiction avec le commerce tel qu’il fonctionne traditionnellement. De plus, l’idée de proposer aux clients des produits frais et sains n’est pas pour me déplaire.

La création d’une application web multipltaforme, cependant, semble un challenge difficile à relever. En effet, il s’agit non seulement de créer une application dont la logique serveur propose une persistence des données et les calculs nécessaires au service de vente, mais aussi une partie cliente qui devra proposer sous une forme conviviale le catalogue des produits du magasin Natural Corner. Après des semaines de développements et d’analyses, il a été finalement décidé de créer une partie serveur pouvant servir de base multiplateforme pour n’importe quelle application cliente de façon modulaire.

L’enjeu de ce travail de fin d’étude est de proposer une solution complète <span class="cmsy-5">≪</span> full stack <span class="cmsy-5">≫</span>, c’est-à-dire allant de la base de donnée à une application cliente, le backend au frontend, munie d’un déploiement sur le Cloud qui permettra de répondre à la demande initiale du gérant du magasin. Tout cela passera par la mise en place d’un framework orienté objet pour assurer la maintenabilité de l’application.

Il est toutefois important de ne pas avoir les yeux plus grands que le ventre et de rester humble dans ses objectifs. Je n’ai pas l’ambition d’égaler une équipe de développement de plusieurs développeurs et analystes spécialisés dans des techniques pointues. Mon objectif principale est de créer les bases solides d’une application WEB qui sera réutilisable et aisément maintenable. Sa capacité à proposer un frontend sera réalisée par la mise en place d’une API de type REST suffisamment flexible pour accueillir par exemple une application Android, iOS ou AngularJS.

Comment réaliser ce programme en partant de zéro sans prendre trop de risques<span class="frenchb-thinspace"> </span>? Il s’agit de mener l’analyse depuis le recueil des besoins jusqu’à l’écriture des diagrammes UML dans l’optique d’arriver à une description fidèle de l’application. Alors seulement l’écriture du code devient aisée et limpide car elle correspond aux différents points de vue conceptuels de l’analyste, transformés de la manière la plus adéquate en code par le programmeur.

La coopération avec le gérant du magasin Natural Corner fut très profitable pour l’écriture de ces diagrammes UML, qui ne sont que la traduction de la logique métier du magasin. J’ai eu plusieurs interview dans lesquels j’ai récupéré et consignés ses attentes.

Il s’agit donc avant tout d’un travail d’analyse en ce sens que son résultat doit être indépendant de tout langage, framework ou architecture logicielle. Cette démarche ne présuppose tout au plus que l’équipe de développement (dans ce cas, le rédacteur de ces lignes) se mette d’accord sur le design pattern d’architecture MVC pour l’écriture du logiciel.

L’implémentation passe par la mise en oeuvre d’un framework Model-View-Controler qui n’existe pas en tant que tel dans le langage de programmation choisi. Ce fut la part du travail la plus ardue mais aussi la plus intéressante en ce sens qu’elle est la jonction entre le mode de pensée orienté objet et son abstraction intrinsèque à la réalité technique du langage de programmation. Ce travail a dû se plier à l’exigence du travail patient du programmeur, fait d’essais et d’erreur, d’égarements plus ou moins longs et de persévérance dans ses objectifs. Au final, c’est une solution viable de l’implémentation de l’analyse et de ses diagrammes UML qui a vu le jour. Ce travail peut donc être considéré, en plus d’être l’application du magasin Natural Corner, comme la création d’un framework MVC PHP. Le déploiement, quant à lui, se fera sur le Cloud. Plus exactement sur un PaaS bien connu nommé Google App Engine. Ce PaaS [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">2</sup>](TFE3.html#fn2x1)<a id="x1-2002f2"></a> propose une API complète et permet de déployer rapidement dans un contexte professionnel une application web.

Pour résumer ce travail, il s’agira du résultat de la création d’un framework MVC codé à partir de zero, pouvant s’utiliser avec un PaaS, permettant de créer une application côté serveur et muni d’une API basée sur la technologie REST. Une telle approche a l’ambition de répondre à la question actuelle du développement <span class="cmsy-5">≪</span> full stack <span class="cmsy-5">≫</span>. Elle correspond à la philosophie orientée objet en ce sens que le code n’est que l’aboutissement d’une réflexion d’analyse et l’architecture qu’une manière flexible d’implémenter par un procédé technique cette réfléxion. Cette application va aussi profiter des services Cloud à faible coût donnant au développeur des résultats se rapprochant le plus possible de la demande initiale du client [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">3</sup>](TFE4.html#fn3x1)<a id="x1-2003f3"></a>.

# <span class="titlemark">Première partie 
</span><a id="x1-30001"></a>Méthodologie et architecture

## <span class="titlemark">Chapitre 2</span>
<a id="x1-40002"></a>Méthodologie

### <span class="titlemark">2.1</span> <a id="x1-50002.1"></a>UP simplifié

La méthodologie utilisée est celle préconisée par le livre de Pascal Roques ”UML2 Modéliser une application web” [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE5.html#fn1x2)<a id="x1-5001f1"></a> qui consiste à utiliser la méthode Unified Process dans une optique simplifiée pour s’adapter idéalement à l’analyse et la conceptualisation d’une application web. Une grande partie des schémas de ce travail sont directement inspirés de ce livre. Ce fut une occasion unique pour me familiariser avec les diagrammes UML et de les assimiler progressivement. La pratique m’a permis d’intégrer la logique sous-jacente de ces diagrammes et leurs connexions avec les besoins du client, la vision du logiciel et le code. Les premiers diagrammes pourront appraître comme de pâles copies des diagrammes du livre mais sont en fait une version adaptée à l’application Natural Corner. Plus j’avançais dans le travail, plus j’arrivais à me détacher du livre pour produire des schémas entièrement originaux (voir l’UC Maintenir catalogue), prouvant à mon sens l’acquisition de la compétence nécessaire pour le métier d’analyste-développeur.

Ce schéma résume la démarche du livre mentionné. En partant du recueil des besoins de l’utilisateur, il est possible de définir les cas d’utilisation, un diagramme de séquence système et une description détaillée. C’est l’objet de la partie ”Fonctionnalités de l’application Natural Corner”. Une maquette peut aussi être réalisée mais il n’a pas été nécessaire de perdre du temps pour une activité plutôt destinée à un graphiste. Ensuite, on peut produire un Diagramme des Classes Participantes qui est une première ébauche de la vision statique de l’application. A partir de ce DCP, on commence à réfléchir plus profondément à la dynamique interne à l’aide des diagrammes d’interaction. Un diagramme de navigation issu en principe de la maquette va être utile pour comprendre la manière dont la partie Vue du logiciel sera utilisée. Enfin, l’ensemble de ces points de vue va aboutir à l’écriture des diagrammes de classes de conception. Dans ma démarche, j’ajoute à cela l’écriture des tests unitaires à partir de ce schéma qui comporte le nom des méthodes des différentes classes. Finalement le code peut être écrit et l’application créée. Par ailleurs, la lecture du livre de référence en programmation orientée objet de Graig Larman [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">2</sup>](TFE6.html#fn2x2)<a id="x1-5002f2"></a> a guidé la problématique d’assignation des responsabilités aux objets de l’analyse représentés sous forme de diagrammes UML.

## <span class="titlemark">Chapitre 3</span>
<a id="x1-60003"></a>Architecture

### <span class="titlemark">3.1</span> <a id="x1-70003.1"></a>Choix technologiques

#### <span class="titlemark">3.1.1</span> <a id="x1-80003.1.1"></a>Choix du langage

J’ai choisi le langage PHP pour plusieurs raisons. Sa popularité (Facebook est programmé en PHP), la possibilité de programmer en orienté objet, le fait d’être libre de créer mon propre framework(par opposition à JavaEE ou .NET). C’est un langage de script, interprété, peu typé, laissant un certain laxisme pour la programmation. Le développement TDD [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE7.html#fn1x3)<a id="x1-8001f1"></a> orienté par les tests permet d’éviter certains écueils (Pas de compilateur pour corriger avant le runtime les erreurs de syntaxe). En contre-partie les performances sont moins bonnes qu’avec les langages compilés. Enfin, j’ajouterais mon expérience personnelle dans ce langage et le fait que le service PaaS que j’utilise autorise l’usage de PHP 5.5 (Google App Engine).

<span class="subparagraphHead"><a id="x1-90003.1.1"></a>PHP contre JavaEE</span> JavaEE très bon pour un grosse équipe car il sépare le travail entre différents groupes avec netteté. Les page .jsp nuisent à ma façon de créer le framework point de vue de la courbe d’apprentissage. Par ailleurs, il faut apprendre un framework Strut ou Spring MVC car JavaEE seul est rarement utilisé.

<span class="subparagraphHead"><a id="x1-100003.1.1"></a>PHP contre .NET</span> Très bon pour grosse équipe. Le XAML et le patron de conception architectural MVVM [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">2</sup>](TFE8.html#fn2x3)<a id="x1-10001f2"></a> sous jacent avec le langage C# qui est sans doute un des meilleurs langages orientés objet. Sa courbe d’apprentissage est acceptable mais quid d’une migration vers un nouvel appareil<span class="frenchb-thinspace"> </span>? Il y a aussi l’obligation de se plier au patron MVVM qui n’est pas le MVC, qui me semble plus adéquat pour l’analyse. Il y a aussi le fait qu’il faut utiliser les produits Microsoft (Visual Studio, I2S), ...

<span class="subparagraphHead"><a id="x1-110003.1.1"></a>PHP avec Angularjs, Android et iOS</span> Si la vue utilise un web service REST, il est découplé avec la frontend et permet de développer sans code PHP la vue. Angularjs [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">3</sup>](TFE9.html#fn3x3)<a id="x1-11001f3"></a> est un framework frontend qui permet d’étendre le HTML. Il utilise le patron MVC et le langage javascript. Il peut être utilisé en fragment en laissant de côté certains aspects techniques plus complexes. Une simple instruction en HTML permet de charger cette bibliothèque et ne demande donc rien de particulier pour les outils de développement. La documentation est excellente et l’équipe de Google dans une optique de promotion de ce framework fait un gros travail pour faciliter la courbe d’apprentissage. Si j’arrive à découpler convenablement le frontend du backend, je pourrai envisager une version Android voire IOS de cette application. Il ne s’agira en fait que d’une vue permettant aux utilisateurs de communiquer avec le backend écrit en PHP.

<span class="subparagraphHead"><a id="x1-120003.1.1"></a>Bootstrap [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">4</sup>](TFE10.html#fn4x3)</span><a id="x1-12001f4"></a> Ce framework CSS est très utile et donne des rendus impressionnants avec un minimum d’effort. Il est “responsive” et permet de developper “mobile-oriented”.

#### <span class="titlemark">3.1.2</span> <a id="x1-130003.1.2"></a>Base de données

<span class="subparagraphHead"><a id="x1-140003.1.2"></a>MySQL</span> Très populaire, s’interface bien avec PHP, documentation claire, excellent tutoriel sur openclassroom [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">5</sup>](TFE11.html#fn5x3)<a id="x1-14001f5"></a> (ancienne étudiante de l’ULB), stackoverflow [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">6</sup>](TFE12.html#fn6x3)<a id="x1-14002f6"></a> déborde de questions et réponses sur ce gestionnaire de base de données, autant de bonnes raisons pour l’adopter. J’ai hésité car PostgreSQL est orienté objet et permet donc de se passer du mapping relationnel-objet. J’ai finalement décidé de ne pas utiliser d’ORM et de mettre en place les requêtes SQL adéquates. J’étais aussi attiré par une base de donnée no SQL comme mongoDB. Cependant, je pense que les données que je vais utiliser demande d’être structurées (par opposition aux enregistrements clé-valeur s’imbriquant et pouvant laisser la place à une certaine difficulté pour la maintenance et les requêtes), en particulier les lignes d’achat et les commandes, je préfère donc rester en SQL relationnel.

### <span class="titlemark">3.2</span> <a id="x1-150003.2"></a>Framework

Pour rappel un Framework est un cadre de travail qui permet au programmeur de développer une application logicielle selon une certaine architecture basée sur un patron de conception. Cette architecture est munie la plupart du temps d’une API (pour les utilisateurs ou les formulaires par exemple) permettant d’augmenter la productivité du programmeur. Un travail professionnel dans le domaine de l’informatique de gestion suppose de nos jours pratiquement à chaque fois l’utilisation d’un framework. En PHP, il existe Symfony [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">7</sup>](TFE13.html#fn7x3)<a id="x1-15001f7"></a> ou Zend [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">8</sup>](TFE14.html#fn8x3)<a id="x1-15002f8"></a> (parmi des dizaines d’autres). Ils sont très demandés dans l’industrie logiciel. Cependant, ici, il n’est pas vraiment question de rentrer dans les détails d’un framework particulier, d’en acquérir les connaissances utiles pour le monde du travail et de rester ainsi bloqué dans un créneau pour le reste de sa carrière (pour autant que ce framework n’ait pas été dépassé par un autre). Il s’agit plutôt de comprendre la logique générale d’un framework en le créant soi-même, afin de rester maître en tout situation de l’outil technologique utilisé. En soi, les frameworks, mêmes s’ils diffèrent en langage de programmation et/ou en pattern de conception architectural, répondent toujours à la même logique fondamentale. Une fois comprise, il est possible de s’adapter rapidement (sans être trop optimiste toutefois, un framework comme Struts et JavaEE demande des mois d’études) à n’importe quel outils de création de logiciels. En adoptant cette logique, il s’agit de mettre à profit mes études d’informatique de gestion et de rester dans une démarche rationnelle quant aux outils de développement.

#### <span class="titlemark">3.2.1</span> <a id="x1-160003.2.1"></a>MVC

Le site du professeur B. Estellon [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">9</sup>](TFE15.html#fn9x3)<a id="x1-16001f9"></a> fournit pour ses étudiants une framework rudimentaire qui s’apparente à ce qu’on appelle un micro-framework [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">10</sup>](TFE16.html#fn10x3)<a id="x1-16002f10"></a>. Selon l’article de Wikipedia, quatre fonctionalités sont assurées<span class="frenchb-nbsp"> </span>: 1) les comptes<span class="frenchb-thinspace"> </span>; 2) l’abstraction de la base de données<span class="frenchb-thinspace"> </span>; 3) la vérification des données introduites par l’utilisateur et 4) le template web [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">11</sup>](TFE17.html#fn11x3)<a id="x1-16003f11"></a>. Eh bien, il s’agit des quatre fonctions que vont remplir ce framework. Voici un schéma expliquant le fonctionnement générale<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-16004r1"></a>

![PIC](1_Volumes_USB_TFE_Screen_Shot_2016-03-31_at_18_11_35.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 3.2.1:</span> <span class="content">MVC</span></div>

</div>

* * *

En PHP, le fichier index.php ressemble à ceci<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-16005r2"></a>

![PIC](2_Volumes_USB_TFE_Screen_Shot_2016-05-15_at_22_53_25.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 3.2.2:</span> <span class="content">index.php</span></div>

</div>

* * *

C’est la réalisation du patron de conception Front controller [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">12</sup>](TFE18.html#fn12x3)<a id="x1-16006f12"></a>. Il va centraliser les requêtes du protocole HTTP. Chaque requête est en même temps séparée par une action et une vue. Les lignes 35 à 40 ont été ajoutées pour récrire les URL. J’aimerais attirer l’attention du lecteur sur le fait que le langage PHP permet une très large marge de manoeuvre comparativement aux autres langages web comme JavaEE ou C# et donne vraiment un sentiment de liberté au développeur. Une idée est toujours réalisable avec un peu de recherche personnelle.

#### <span class="titlemark">3.2.2</span> <a id="x1-170003.2.2"></a>Framework ”fait maison”

Un framework [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">13</sup>](TFE19.html#fn13x3)<a id="x1-17001f13"></a> fait par soi-même contient plusieurs avantages [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">14</sup>](TFE20.html#fn14x3)<a id="x1-17002f14"></a><span class="frenchb-nbsp"> </span>:

*   Plus facile à mettre à jour et à maintenir puisque je l’ai construit.
*   Pas de problèmes de licences.
*   Pousse à une connaissance étendue de la conception orientée objet et des technologies WEB (PHP, requêtes http, css, javascript, HTML5, ...). D’une part, les choix d’implémentation doivent être réfléchis en fonction de la conception objet et de l’analyse, d’autre part des efforts de compréhensions supplémentaires sont nécessaires pour appréhender les différents concepts, que ce soit du point de vue du langage web (ici PHP et la pile HTML5) ou du déploiement sur l’internet. Rien n’est laissé à une couche logicielle pré-construite, très utile en terme de productivité certes mais occultant souvent les raisonnements sous-jacents et le bien fondé de l’utilisation de tel ou tel patron de conception. Il s’agit à mon avis d’un must dans une optique d’apprentissage.
*   Le code est plus efficient puisqu’il ne s’embarasse pas des différents modules et couches logiciels des frameworks de l’industrie.

### <span class="titlemark">3.3</span> <a id="x1-180003.3"></a>Outils logiciels

*   Eclipse PHP [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">15</sup>](TFE21.html#fn15x3)<a id="x1-18001f15"></a> (version Mars) me convient car j’ai l’habitude de l’utiliser. Il est particulièrement populaire, open-source et agréable à utiliser. L’auto-completion est assurée et il prévoit des outils de développement pour le javascript et le html-css. Je peux utiliser si je désire le débuggueur (ici X-DEBUG). J’ai accès à un CVS (avec Github) grace à un module téléchargé et ajouté, je peux aussi faire des tests unitaires avec PHPUnit qui est interfacé dans ce EDI.
*   Navigateur Chrome [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">16</sup>](TFE22.html#fn16x3)<a id="x1-18002f16"></a><span class="frenchb-nbsp"> </span>: offre des outils pour le développeur web, notamment une console javascript, une possibilité de voir le rendu sur différents devices (smartphones, tablettes)
*   StarUML [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">17</sup>](TFE23.html#fn17x3)<a id="x1-18003f17"></a><span class="frenchb-nbsp"> </span>: ce logiciel permet de créer des diagrammes UML de qualité.
*   Google App Engine [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">18</sup>](TFE24.html#fn18x3)<a id="x1-18004f18"></a><span class="frenchb-nbsp"> </span>: Ce service PaaS de Google est très intéressant car il permet de déployer sur le web une application très facilement. Il propose une base de données Google Cloud SQL (MySQL) et un certain nombre d’APIs plus ou moins intéressantes. Tout ce que j’apprends en déployant et maintenant une application web avec ce service cloud est utilisable sur n’importe quel autre service Cloud. Je pense profondément qu’il s’agira d’un plus indéniable pour ma carrière de développeur.
*   On peut ajouter GitHub [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">19</sup>](TFE25.html#fn19x3)<a id="x1-18005f19"></a>, serveur open source et partagé pour git, permettant de garder un historique et des “forks” de mes versions de l’application.

# <span class="titlemark">Deuxième partie 
</span><a id="x1-190003.3"></a>Fonctionnalités de l’application Natural Corner

## <span class="titlemark">Chapitre 4</span>
<a id="x1-200004"></a>Expression initiale des besoins

### <span class="titlemark">4.1</span> <a id="x1-210004.1"></a>Vision du projet

##### <a id="x1-220004.1"></a>Demande initiale

Le gérant du magasin Natural Corner, spécialisé en produit bio, aimerait offrir à sa clientèle une application web utilisable sur tablette et smartphone pour leur permettre de pré-commander les produits frais. L’objectif fondamental est de permettre aux clients de chercher les produits frais par catégorie ou par mot-clé, en connaître le prix, de créer un panier virtuel et les pré commander éventuellement. L’application doit aussi permettre au gérant du magasin de faciliter l’écoulement des invendus en proposant une promotion journalière sur ces produits frais. Enfin, les produits devront afficher des informations en relation avec la fraîcheur, la qualité et le développement durable.

##### <a id="x1-230004.1"></a>Positionnement

L’application Natural Corner devra être la plateforme de commande des produits frais. Il existe déjà un site internet et ne devra pas le concurrencer. Le but du projet consiste à créer une étape supplémentaire dans le logique “bio” du magasin en rationalisant la commandes des produits frais en relation avec les fermes et producteurs proches du magasin. Une gestion à flux tendu et en relation avec les récoltes se rapproche de la philosophie “bio” et du développement durable. Se différencier des autres magasins “bio” en proposant un plus contemporain qui plaira à la jeune clientèle .

### <span class="titlemark">4.2</span> <a id="x1-240004.2"></a>Analyse métier

#### <span class="titlemark">4.2.1</span> <a id="x1-250004.2.1"></a>Natural Corner

Le 26 avril 2009 [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE26.html#fn1x4)<a id="x1-25001f1"></a>, Natural Corner ouvre son enseigne au milieu de la ville de Bruxelles dans une situation idéale. Aboudi Ei, ancien restaurateur dans un restaurant de la place de la vieille halle au blé a été éduqué culinairement à l’utilisation des produits locaux. Pendant ses années de travail dans la restauration, il a appris que la qualité des aliments est au moins aussi importante que la maitrise de l’art de cuisiner. Il s’est pris de passion pour le bio et a voulu changer la direction de sa carrière professionnelle en réalisant le projet d’ouverture d’un magasin bio. Les autres passionnés pourront ainsi plus facilement se procurer des aliments de qualité.

A. Ei avait constaté en effet le manque criant de boutique bio dans le centre ville. Il n’y avait alors guère que le magasin bio de la rue des Chartreux pouvant proposer des produits bio labelisés. Le coin de la rue de l’escalier donnant sur la place de la vieille halle au blé était alors à vendre. Les locaux étaient un endroit idéal pour créer le magasin. Ce fut un succès quasi immédiat. Après quatre mois de travail ardu, à la rentrée, la clientèle s’est manifesté avec enthousiasme et le succès n’a fait qu’augmenter depuis. Ce succès vient du service et de l’écoute des clients. Le catalogue a changé de 90 pour cent depuis l’ouverture. Ce sont les discussions avec les clients, leurs attentes et leurs desirs qui ont été mis en avant. Le choix des produits était à chaque fois à l’origine d’une demande. La clientèle est particulièrement diversifiée, toutes les tranches d’âge viennent se procurer au magasin Natural Corner.

#### <span class="titlemark">4.2.2</span> <a id="x1-260004.2.2"></a>Logique métier

Du point de vue du business, on peut dire que Natural Corner fonctionne selon un circuit court à flux tendu, le stock est à son état minimum et les commandes maximisées de manière à garantir la fraîcheur des produits. Les dates doivent être les meilleurs proposées, aussi les quantités commandées sont petites. Cela représente beaucoup de travail physique, on peut compter plus de 50 commandes par semaine et les commandes de produits frais ont lieu tous les jours. Pour garantir la fraîcheur, les bacs sont régulièrement changés, les dates vérifiées systématiquement. Une ristourne à l’avantage du client est proposé lorsqu’un produit va être sur le point de perdre sa fraîcheur, ce qui facilité le roulement du stock.

Pour accomplir ce travail, le staff est réprésenté par un gérant et trois vendeurs. Le magasin Natural Corner bénéficie du label Biogarantie [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">2</sup>](TFE27.html#fn2x4)<a id="x1-26001f2"></a>.

* * *

<div class="figure"><a id="x1-26002r1"></a>

![PIC](3_Volumes_USB_TFE_Screen_Shot_2016-05-16_at_10_05_24.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 4.2.1:</span> <span class="content">Label Biogarantie de Natural Corner</span></div>

</div>

* * *

Deux points de vue se dégagent<span class="frenchb-nbsp"> </span>: le point de vue des clients du magasin Natural Corner, et celui des clients du marché belge utilisant déjà une application de vente en ligne pour commander des produits bio.

Les clients de Natural Corner sont des habitués recherchant des produits spécifiques. Ils aiment en général l’idée d’avoir un magasin bio dans le quartier. Cependant, le site internet du magasin n’offre que des informations d’ordre général. Il serait intéressant de leur proposer une application leur permettant de faire leur course en ligne et d’éviter de chercher dans les rayons.

En ce qui concerne le marché bio, il existe une série de site web proposant les achats en ligne. En faisant une simple recherche Google, on trouve une grande quantité de site français qui propose la commande en ligne de produits bio. Il s’agit souvent de sites traditionnels ne proposant pas d’app IOS ou Android et n’étant pas responsive. Il y a [<span class="cmtt-10">http://www.greenweez.com/</span>](http://www.greenweez.com/) dont le site est responsive et qui livre en Belgique, par exemple.

Le plus gros concurrent, à mon sens, est sans doute Collect&Go du groupe Colruyt sous le nom Bioplanet qui propose une app et qui est responsive pour les tablettes et smartphones. Après avoir exprimé cette opinion au gérant, il m’a expliqué que le positionnement n’est en fait pas le même. Dans le cas des grandes enseignes comme Bio Planet ou Farm, l’assortiment proposé correspond au minimum des exigences bio, l’important restant le prix et la rentabilité [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">3</sup>](TFE28.html#fn3x4)<a id="x1-26003f3"></a>. On peut prendre l’exemple connu du thé Yogithea qui a disparu des rayons parce que son prix avait subitement augmenté en raison de la variation du prix du marché du thé. Par opposition, un magasin bio de proximité continue à proposer un produit à ses clients si la demande existe.

Notons l’existence de Delhaize qui propose son assortiment bio en ligne et Carrefour avec son Carrefour-Drive.

Natural Corner doit se dégager de cette concurrence en proposant une approche familiale des commandes en ligne. Tout l’enjeu est de garder l’esprit du magasin tout en se modernisant par une application web.

Une des idées qui est ressortie pendant mes interviews avec le gérant du magasin est de mettre en relation la page Facebook du magasin, des recettes de cuisine et les promotions. Le créneau sur lequel cette application se situe n’est pas celui des grands sites de vente en ligne impersonnels, il s’agit de faire participer la communauté du quartier et les fans de produits bio. Plus qu’une simple opportunité d’augmenter ses parts de marché, il est surtout question de rendre la démarche de consommation bio agréable et amicale.

### <span class="titlemark">4.3</span> <a id="x1-270004.3"></a>Exigences fonctionnelles

Cette application permettra à l’utilisateur de rechercher un produit, d’en découvrir les spécificités, de le choisir et de le précommander.

##### <a id="x1-280004.3"></a>Rechercher un produit

Le catalogue des produits frais permet d’y rechercher un produit. Il existera plusieurs méthodes de recherche. Le critère pourra être le nom, le mot-clé, la saison, le prix, ... Les résultats seront facilement consultables et reclassables. Il y aura par défaut une offre lui permettant de voir les produits sélectionnables.

##### <a id="x1-290004.3"></a>Informations sur le produit

Le produit se présentera au client en affichant<span class="frenchb-nbsp"> </span>: Une image le prix et la disponibilité la saison son origine une information de nature didactique sur les vertus curatives par ex.

##### <a id="x1-300004.3"></a>Choix du produit

Il y aura un panier qui se remplira au fur et à mesure des sélections sur client. Une fois rempli le panier, celui-ci pour être validé sur une page spécifique. Ce panier pourra être changé ou supprimé par la suite.

##### <a id="x1-310004.3"></a>Commande

Un formulaire de bon de commande confirme le panier. En fonction de la disponibilité le client est invité à venir chercher son panier au magasin.

##### <a id="x1-320004.3"></a>Promotions du jour

Une promotion journalière sera envoyé aux clients par notification. Les employés du magasin seront chargés d’envoyer cette notification.

##### <a id="x1-330004.3"></a>Facebook

Le client devrai “liker” la page Facebook de la boutique au moins une fois pour accéder aux services de l’application.

##### <a id="x1-340004.3"></a>Messages sociaux et durables

L’application devra permettre aux employés du magasin d’informer par un système de news sur les nouveaux produits.

### <span class="titlemark">4.4</span> <a id="x1-350004.4"></a>Exigences non fonctionnelles

##### <a id="x1-360004.4"></a>Qualité professionnelle

L’application devra montrer un bon niveau de qualité afin de renvoyer un certain standing.

##### <a id="x1-370004.4"></a>Graphisme

Les logos et couleurs de l’enseigne doivent être gardés.

### <span class="titlemark">4.5</span> <a id="x1-380004.5"></a>Exigences de performance

Le niveau de performance n’est pas essentiel puisqu’il vise une centaine de clients pour commencer. Cependant il faudra tenir en compte la possibilité de monter en charger dans les mois suivants.

### <span class="titlemark">4.6</span> <a id="x1-390004.6"></a>Contraintes de conception

##### <a id="x1-400004.6"></a>Base de données des produits

La base de données des produits sera créée avec les catalogues des fournisseurs. Le gérant du magasin aura la possibilité d’ajouter ou de retirer des produits.

##### <a id="x1-410004.6"></a>Base de données des clients

Les clients donneront des informations personnelles qui seront enregistrées dans la base de données. Ces informations seront sécurisées et confidentielles.

##### <a id="x1-420004.6"></a>Panier

Le panier sera enregistré sous forme de cookies pour une durée d’un an. Le client pourra ainsi retrouver son panier tel quel dans une nouvelle session.

##### <a id="x1-430004.6"></a>Support

L’application sera compatible sur les tablettes et smartphone IOS et Android.

## <span class="titlemark">Chapitre 5</span>
<a id="x1-440005"></a>Cas d’utilisation

Nous allons essayer de dégager à qui et pour quoi faire les informations vont être montrées [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE29.html#fn1x5)<a id="x1-44001f1"></a>. Nous allons identifier les acteurs et les cas d’identification.

### <span class="titlemark">5.1</span> <a id="x1-450005.1"></a>Use case des utilisateurs

L’acteur est l’utilisateur de l’application. Les cas d’utilisation ont été mis en évidence par l’expression des besoins préliminaire<span class="frenchb-nbsp"> </span>: Créer son compte, gérer son compte, chercher des produits, gérer son panier, commander.

* * *

<div class="figure"><a id="x1-45001r1"></a>

![PIC](4_Volumes_USB_TFE_UC_utilisateurs.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 5.1.1:</span> <span class="content">Use case des utilisateurs</span></div>

</div>

* * *

### <span class="titlemark">5.2</span> <a id="x1-460005.2"></a>Use case des employés

Un gérant hérite d’un vendeur parce qu’il peut réaliser son travail et a, en plus, la charge de la mise à jour du catalogue. Les cas d’utilisation sont maintenir le catalogue et envoyer des promos.

* * *

<div class="figure"><a id="x1-46001r1"></a>

![PIC](5_Volumes_USB_TFE_UC_employes.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 5.2.1:</span> <span class="content">Use case des employés</span></div>

</div>

* * *

### <span class="titlemark">5.3</span> <a id="x1-470005.3"></a>Use case secondaire

#### <span class="titlemark">5.3.1</span> <a id="x1-480005.3.1"></a>API

Il s’agit d’un cas d’utilisation secondaire qui correspond à la capacité de l’application à être utilisée par une autre application. Son développement aura lieu au chapitre 11.

* * *

<div class="figure"><a id="x1-48001r1"></a>

![PIC](6_Volumes_USB_TFE_UC_secondaire_API.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 5.3.1:</span> <span class="content">Use case secondaire - API</span></div>

</div>

* * *

### <span class="titlemark">5.4</span> <a id="x1-490005.4"></a>Classement des cas d’utilisation et planification du projet en itération

Pour réaliser le logiciel, j’ai décidé de donner une priorité aux cas d’utilisation en fonction des risques et de la priorité. Chaque cas d’utilisation correspond à une itération selon la méthodologue UP.

<div class="center">

<div class="tabular">

<colgroup id="TBL-1-1g"><col id="TBL-1-1"></colgroup><colgroup id="TBL-1-2g"><col id="TBL-1-2"></colgroup><colgroup id="TBL-1-3g"><col id="TBL-1-3"></colgroup><colgroup id="TBL-1-4g"><col id="TBL-1-4"></colgroup>
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |
| Cas d’utilisation | Priorité | Risque | Itération |
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |
| Créer un compte client | Haute | Moyen | 1 |
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |
| Gérer son compte client | Moyenne | Moyen | 2 |
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |
| Recherche des produits | Haute | Moyen | 3 |
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |
| Gérer son panier | Haute | Haute | 4 |
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |
| Commander | Moyenne | Haut | 5 |
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |
| Maintenir le catalogue | Haute | Moyen | 6 |
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |
| Envoyer les notifications promotionnelles | Haute | Haut | 7 |
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |
| Developper une API | Moyenne | Bas | 8 |
| 

* * *

 | 

* * *

 | 

* * *

 | 

* * *

 |

</div>

</div>

## <span class="titlemark">Chapitre 6</span>
<a id="x1-500006"></a>Maquette

La maquette a été créée en langage statique HTML. L’application doit garder le logo du magasin et ses couleurs en général. Des diagrammes de navigation ont été élaborés pour les différents cas d’utilisation dans la partie de réalisation des cas d’utilisation.

### <span class="titlemark">6.1</span> <a id="x1-510006.1"></a>Captures d’écran

Il est important de garder une allure correspondant aux application Android et iOS. On voit la possibilité de se logguer avec Facebook et aussi avec un email et une mot de passe. Le catalogue des fruits et légumes reste simple, sans surcharge.

* * *

<div class="figure"><a id="x1-51001r1"></a>

![PIC](7_Volumes_USB_TFE_Screen_Shot_2016-03-31_at_14_27_59.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 6.1.1:</span> <span class="content">Navigation</span></div>

</div>

* * *

Voici ce que donne l’application dans un format correspond à un smartphone.

* * *

<div class="figure"><a id="x1-51002r2"></a>

![PIC](8_Volumes_USB_TFE_Screen_Shot_2016-03-31_at_14_30_23.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 6.1.2:</span> <span class="content">Mobile-first design</span></div>

</div>

* * *

# <span class="titlemark">Troisième partie 
</span><a id="x1-520006.1"></a>Spécifications détaillées des exigences

## <span class="titlemark">Chapitre 7</span>
<a id="x1-530007"></a>Descriptions des cas d’utilisation et diagrammes de séquence système

Ce chapitre va décrire de manière détaillée les cas d’utilisation et à chaque fois remplir une fiche-type pour chaque cas [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE30.html#fn1x7)<a id="x1-53001f1"></a>. Il s’agit de décrire un scénario nominal en se mettant à la place de l’utilisateur dans son rôle vis-à-vis de l’application. Ensuite vient le diagramme de séquence système qui va considérer l’application comme une boîte noire avec laquelle l’acteur interagit.

### <span class="titlemark">7.1</span> <a id="x1-540007.1"></a>UC Créer son compte client

#### <span class="titlemark">7.1.1</span> <a id="x1-550007.1.1"></a>Description

<a id="x1-55001r1"></a>

<div class="longtable">

<colgroup id="TBL-2-1g"><col id="TBL-2-1"></colgroup>
| 

* * *

 |
| 

<span class="paragraphHead"><a id="x1-560001"></a>Description du UC ’Créer son compte client’</span>

 |
| 

* * *

 |
| 

##### <a id="x1-570001"></a><span class="cmr-8">Acteur principal</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">visiteur.</span>

##### <a id="x1-580001"></a><span class="cmr-8">Acteurs secondaires</span>

*   <span class="cmr-8">N</span><span class="cmr-8">éant.</span>

##### <a id="x1-590001"></a><span class="cmr-8">Objectifs</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">visiteur</span> <span class="cmr-8">veut</span> <span class="cmr-8">pouvoir</span> <span class="cmr-8">acc</span><span class="cmr-8">éder</span> <span class="cmr-8">au</span> <span class="cmr-8">contenu</span> <span class="cmr-8">de</span> <span class="cmr-8">l’application</span> <span class="cmr-8">en</span> <span class="cmr-8">indiquant</span> <span class="cmr-8">son</span> <span class="cmr-8">adresse</span> <span class="cmr-8">e-mail</span> <span class="cmr-8">et</span> <span class="cmr-8">un</span> <span class="cmr-8">mot</span> <span class="cmr-8">de</span> <span class="cmr-8">passe.</span> <span class="cmr-8">Il</span> <span class="cmr-8">peut</span> <span class="cmr-8">aussi</span> <span class="cmr-8">s’il</span> <span class="cmr-8">le</span> <span class="cmr-8">d</span><span class="cmr-8">ésire</span> <span class="cmr-8">indiquer</span> <span class="cmr-8">d’autres</span> <span class="cmr-8">informations</span> <span class="cmr-8">(nom,</span> <span class="cmr-8">nom</span> <span class="cmr-8">de</span> <span class="cmr-8">famille,</span> <span class="cmr-8">etc. . .).</span>

##### <a id="x1-600001"></a><span class="cmr-8">Pr</span><span class="cmr-8">éconditions</span>

*   <span class="cmr-8">L’application</span> <span class="cmr-8">est</span> <span class="cmr-8">d</span><span class="cmr-8">éploy</span><span class="cmr-8">ée</span> <span class="cmr-8">avec</span> <span class="cmr-8">une</span> <span class="cmr-8">base</span> <span class="cmr-8">de</span> <span class="cmr-8">donn</span><span class="cmr-8">ées</span> <span class="cmr-8">pr</span><span class="cmr-8">ête.</span>

##### <a id="x1-610001"></a><span class="cmr-8">Postconditions</span>

*   <span class="cmr-8">La</span> <span class="cmr-8">base</span> <span class="cmr-8">de</span> <span class="cmr-8">donn</span><span class="cmr-8">ées</span> <span class="cmr-8">contient</span> <span class="cmr-8">un</span> <span class="cmr-8">utilisateur</span> <span class="cmr-8">en</span> <span class="cmr-8">plus</span> <span class="cmr-8">et</span> <span class="cmr-8">celui-ci</span> <span class="cmr-8">peut</span> <span class="cmr-8">utiliser</span> <span class="cmr-8">l’application.</span>

 |
| 

* * *

 |
| 

##### <a id="x1-620001"></a><span class="cmr-8">Sc</span><span class="cmr-8">énario nominal</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">visiteur</span> <span class="cmr-8">appuie</span> <span class="cmr-8">sur</span> <span class="cmr-8">le</span> <span class="cmr-8">bouton</span> <span class="cmr-8">“Inscription”</span> <span class="cmr-8">de</span> <span class="cmr-8">la</span> <span class="cmr-8">page</span> <span class="cmr-8">d’accueil.</span></dd>

<dt class="enumerate-enumitem">2\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">La</span> <span class="cmr-8">page</span> <span class="cmr-8">d’inscription</span> <span class="cmr-8">s’affiche.</span></dd>

<dt class="enumerate-enumitem">3\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">visiteur</span> <span class="cmr-8">indique</span> <span class="cmr-8">son</span> <span class="cmr-8">email</span> <span class="cmr-8">et</span> <span class="cmr-8">un</span> <span class="cmr-8">mot</span> <span class="cmr-8">de</span> <span class="cmr-8">passe</span> <span class="cmr-8">qu’il</span> <span class="cmr-8">confirme.</span></dd>

<dt class="enumerate-enumitem">4\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">visiteur</span> <span class="cmr-8">est</span> <span class="cmr-8">enregistr</span><span class="cmr-8">é</span> <span class="cmr-8">et</span> <span class="cmr-8">dirig</span><span class="cmr-8">é</span> <span class="cmr-8">vers</span> <span class="cmr-8">la</span> <span class="cmr-8">page</span> <span class="cmr-8">d’accueil.</span></dd>

</dl>

 |
| 

* * *

 |
| 

##### <a id="x1-630001"></a><span class="cmr-8">Alternatives</span>

*   <span class="cmr-8">1a</span> <span class="cmr-8">Le</span> <span class="cmr-8">visiteur</span> <span class="cmr-8">se</span> <span class="cmr-8">loggue</span> <span class="cmr-8">avec</span> <span class="cmr-8">Facebook.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">visiteur</span> <span class="cmr-8">appuie</span> <span class="cmr-8">sur</span> <span class="cmr-8">le</span> <span class="cmr-8">bouton</span> <span class="cmr-8">“Facebook”.</span></dd>

<dt class="enumerate-enumitem">2\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Un</span> <span class="cmr-8">compte</span> <span class="cmr-8">client</span> <span class="cmr-8">est</span> <span class="cmr-8">automatiquement</span> <span class="cmr-8">cr</span><span class="cmr-8">é</span><span class="cmr-8">é.</span></dd>

</dl>

*   <span class="cmr-8">3.a</span> <span class="cmr-8">Le</span> <span class="cmr-8">visiteur</span> <span class="cmr-8">indique</span> <span class="cmr-8">un</span> <span class="cmr-8">mot</span> <span class="cmr-8">de</span> <span class="cmr-8">passe</span> <span class="cmr-8">ne</span> <span class="cmr-8">correspondant</span> <span class="cmr-8">pas</span> <span class="cmr-8">aux</span> <span class="cmr-8">crit</span><span class="cmr-8">ères</span> <span class="cmr-8">de</span> <span class="cmr-8">s</span><span class="cmr-8">écurit</span><span class="cmr-8">é.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Apr</span><span class="cmr-8">ès</span> <span class="cmr-8">avoir</span> <span class="cmr-8">appuy</span><span class="cmr-8">é</span> <span class="cmr-8">sur</span> <span class="cmr-8">“envoyer”,</span> <span class="cmr-8">l’application</span> <span class="cmr-8">lui</span> <span class="cmr-8">transmet</span> <span class="cmr-8">un</span> <span class="cmr-8">message</span> <span class="cmr-8">d’erreur.</span></dd>

</dl>

*   <span class="cmr-8">3.b</span> <span class="cmr-8">Le</span> <span class="cmr-8">visiteur</span> <span class="cmr-8">confirme</span> <span class="cmr-8">son</span> <span class="cmr-8">mot</span> <span class="cmr-8">de</span> <span class="cmr-8">passe</span> <span class="cmr-8">avec</span> <span class="cmr-8">un</span> <span class="cmr-8">autre</span> <span class="cmr-8">mot</span> <span class="cmr-8">de</span> <span class="cmr-8">passe.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Apr</span><span class="cmr-8">ès</span> <span class="cmr-8">avoir</span> <span class="cmr-8">appuy</span><span class="cmr-8">é</span> <span class="cmr-8">sur</span> <span class="cmr-8">“envoyer”,</span> <span class="cmr-8">l’application</span> <span class="cmr-8">lui</span> <span class="cmr-8">transmet</span> <span class="cmr-8">un</span> <span class="cmr-8">message</span> <span class="cmr-8">d’erreur.</span></dd>

</dl>

*   <span class="cmr-8">3.c</span> <span class="cmr-8">Le</span> <span class="cmr-8">visiteur</span> <span class="cmr-8">d</span><span class="cmr-8">écide</span> <span class="cmr-8">de</span> <span class="cmr-8">remplir</span> <span class="cmr-8">les</span> <span class="cmr-8">autres</span> <span class="cmr-8">champs</span> <span class="cmr-8">non</span> <span class="cmr-8">obligatoires.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Si</span> <span class="cmr-8">un</span> <span class="cmr-8">des</span> <span class="cmr-8">champs</span> <span class="cmr-8">ne</span> <span class="cmr-8">correspond</span> <span class="cmr-8">pas</span> <span class="cmr-8">aux</span> <span class="cmr-8">crit</span><span class="cmr-8">ères,</span> <span class="cmr-8">l’application</span> <span class="cmr-8">lui</span> <span class="cmr-8">transmet</span> <span class="cmr-8">un</span> <span class="cmr-8">message</span> <span class="cmr-8">d’erreur.</span></dd>

</dl>

 |
| 

* * *

 |

</div>

#### <span class="titlemark">7.1.2</span> <a id="x1-640007.1.2"></a>Diagramme de séquence système

L’inscription laisse le choix entre une inscription dite classique et une inscription par l’intermédiaire du réseau social Facebook. Plusieurs champs sont optionnels, en fait tous les champs sauf l’adresse e-mail et le mot de passe. Veuillez noter que la flèche représentant le message vers le système Natural Corner n’est pas rempli en noir, non pas que, comme l’indique la documentation UML 2, il s’agit d’un signal asynchrone (qui n’arrête pas l’exécution du process en attente d’une réponse) mais plutôt qu’il n’est pas utile de s’arrêter à ce niveau de détails pour un diagramme de séquence système. Nous voulons seulement indiquer qu’il existe une interaction séquentielle, peu importe qu’elle soit synchrone ou asynchrone.

* * *

<div class="figure"><a id="x1-64001r1"></a>

![PIC](9_Volumes_USB_TFE_0_Users_ivymike_Documents_dss_creer_compte.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 7.1.1:</span> <span class="content">Diagramme de séquence système ”Créer son compte client”</span></div>

</div>

* * *

### <span class="titlemark">7.2</span> <a id="x1-650007.2"></a>UC Gérer son compte client

Ce Use Case est très similaire au précédent. Il s’agit de permettre à l’utilisateur de changer ses données.

#### <span class="titlemark">7.2.1</span> <a id="x1-660007.2.1"></a>Description

<a id="x1-66001r2"></a>

<div class="longtable">

<colgroup id="TBL-3-1g"><col id="TBL-3-1"></colgroup>
| 

* * *

 |
| 

<span class="paragraphHead"><a id="x1-670002"></a>Description du UC ’Gérer son compte client’</span>

 |
| 

* * *

 |
| 

##### <a id="x1-680002"></a><span class="cmr-8">Acteur principal</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">client.</span>

##### <a id="x1-690002"></a><span class="cmr-8">Acteurs secondaires</span>

*   <span class="cmr-8">N</span><span class="cmr-8">éant.</span>

##### <a id="x1-700002"></a><span class="cmr-8">Objectifs</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">veut</span> <span class="cmr-8">changer</span> <span class="cmr-8">son</span> <span class="cmr-8">compte</span> <span class="cmr-8">client</span> <span class="cmr-8">avec</span> <span class="cmr-8">des</span> <span class="cmr-8">nouvelles</span> <span class="cmr-8">informations.</span>

##### <a id="x1-710002"></a><span class="cmr-8">Pr</span><span class="cmr-8">éconditions</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">est</span> <span class="cmr-8">d</span><span class="cmr-8">éj</span><span class="cmr-8">à</span> <span class="cmr-8">enregistr</span><span class="cmr-8">é</span> <span class="cmr-8">et</span> <span class="cmr-8">loggu</span><span class="cmr-8">é.</span>

##### <a id="x1-720002"></a><span class="cmr-8">Postconditions</span>

*   <span class="cmr-8">La</span> <span class="cmr-8">base</span> <span class="cmr-8">de</span> <span class="cmr-8">donn</span><span class="cmr-8">ées</span> <span class="cmr-8">contient</span> <span class="cmr-8">des</span> <span class="cmr-8">nouvelles</span> <span class="cmr-8">informations</span> <span class="cmr-8">sur</span> <span class="cmr-8">le</span> <span class="cmr-8">client.</span>

 |
| 

* * *

 |
| 

##### <a id="x1-730002"></a><span class="cmr-8">Sc</span><span class="cmr-8">énario nominal</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">appuie</span> <span class="cmr-8">sur</span> <span class="cmr-8">l’ic</span><span class="cmr-8">ône</span> <span class="cmr-8">du</span> <span class="cmr-8">petit</span> <span class="cmr-8">bonhomme</span> <span class="cmr-8">ou</span> <span class="cmr-8">dans</span> <span class="cmr-8">le</span> <span class="cmr-8">burger</span> <span class="cmr-8">menu</span> <span class="cmr-8">sur</span> <span class="cmr-8">“Voir</span> <span class="cmr-8">Compte”.</span></dd>

<dt class="enumerate-enumitem">2\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">La</span> <span class="cmr-8">page</span> <span class="cmr-8">du</span> <span class="cmr-8">client</span> <span class="cmr-8">avec</span> <span class="cmr-8">ses</span> <span class="cmr-8">informations</span> <span class="cmr-8">s’affiche.</span></dd>

<dt class="enumerate-enumitem">3\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">appuie</span> <span class="cmr-8">sur</span> <span class="cmr-8">le</span> <span class="cmr-8">bouton</span> <span class="cmr-8">“Modifier”</span> <span class="cmr-8">et</span> <span class="cmr-8">est</span> <span class="cmr-8">dirig</span><span class="cmr-8">é</span> <span class="cmr-8">vers</span> <span class="cmr-8">un</span> <span class="cmr-8">formulaire</span> <span class="cmr-8">pr</span><span class="cmr-8">érempli</span> <span class="cmr-8">contenant</span> <span class="cmr-8">ses</span> <span class="cmr-8">information.</span></dd>

<dt class="enumerate-enumitem">4\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">modifie</span> <span class="cmr-8">ses</span> <span class="cmr-8">information</span> <span class="cmr-8">selon</span> <span class="cmr-8">son</span> <span class="cmr-8">envie.</span></dd>

<dt class="enumerate-enumitem">5\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">appuie</span> <span class="cmr-8">sur</span> <span class="cmr-8">le</span> <span class="cmr-8">bouton</span> <span class="cmr-8">rouge</span> <span class="cmr-8">“modifier”,</span> <span class="cmr-8">est</span> <span class="cmr-8">dirig</span><span class="cmr-8">é</span> <span class="cmr-8">vers</span> <span class="cmr-8">la</span> <span class="cmr-8">page</span> <span class="cmr-8">d’accueil</span> <span class="cmr-8">et</span> <span class="cmr-8">un</span> <span class="cmr-8">message</span> <span class="cmr-8">lui</span> <span class="cmr-8">indique</span> <span class="cmr-8">que</span> <span class="cmr-8">ses</span> <span class="cmr-8">informations</span> <span class="cmr-8">ont</span> <span class="cmr-8">ét</span><span class="cmr-8">é</span> <span class="cmr-8">mises</span> <span class="cmr-8">à</span> <span class="cmr-8">jour.</span></dd>

</dl>

 |
| 

* * *

 |
| 

##### <a id="x1-740002"></a><span class="cmr-8">Alternatives</span>

*   <span class="cmr-8">5.a</span> <span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">indique</span> <span class="cmr-8">un</span> <span class="cmr-8">mot</span> <span class="cmr-8">de</span> <span class="cmr-8">passe</span> <span class="cmr-8">ne</span> <span class="cmr-8">correspondant</span> <span class="cmr-8">pas</span> <span class="cmr-8">aux</span> <span class="cmr-8">crit</span><span class="cmr-8">ères</span> <span class="cmr-8">de</span> <span class="cmr-8">s</span><span class="cmr-8">écurit</span><span class="cmr-8">é.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Apr</span><span class="cmr-8">ès</span> <span class="cmr-8">avoir</span> <span class="cmr-8">appuy</span><span class="cmr-8">é</span> <span class="cmr-8">sur</span> <span class="cmr-8">“Modifier”,</span> <span class="cmr-8">l’application</span> <span class="cmr-8">lui</span> <span class="cmr-8">transmet</span> <span class="cmr-8">un</span> <span class="cmr-8">message</span> <span class="cmr-8">d’erreur.</span></dd>

</dl>

*   <span class="cmr-8">5.b</span> <span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">confirme</span> <span class="cmr-8">son</span> <span class="cmr-8">mot</span> <span class="cmr-8">de</span> <span class="cmr-8">passe</span> <span class="cmr-8">avec</span> <span class="cmr-8">un</span> <span class="cmr-8">autre</span> <span class="cmr-8">mot</span> <span class="cmr-8">de</span> <span class="cmr-8">passe.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Apr</span><span class="cmr-8">ès</span> <span class="cmr-8">avoir</span> <span class="cmr-8">appuy</span><span class="cmr-8">é</span> <span class="cmr-8">sur</span> <span class="cmr-8">“Modifier”,</span> <span class="cmr-8">l’application</span> <span class="cmr-8">lui</span> <span class="cmr-8">transmet</span> <span class="cmr-8">un</span> <span class="cmr-8">message</span> <span class="cmr-8">d’erreur.</span></dd>

</dl>

*   <span class="cmr-8">5.c</span> <span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">d</span><span class="cmr-8">écide</span> <span class="cmr-8">de</span> <span class="cmr-8">remplir</span> <span class="cmr-8">les</span> <span class="cmr-8">autres</span> <span class="cmr-8">champs.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Si</span> <span class="cmr-8">un</span> <span class="cmr-8">des</span> <span class="cmr-8">champs</span> <span class="cmr-8">ne</span> <span class="cmr-8">correspond</span> <span class="cmr-8">pas</span> <span class="cmr-8">aux</span> <span class="cmr-8">crit</span><span class="cmr-8">ères,</span> <span class="cmr-8">l’application</span> <span class="cmr-8">lui</span> <span class="cmr-8">transmet</span> <span class="cmr-8">un</span> <span class="cmr-8">message</span> <span class="cmr-8">d’erreur.</span></dd>

</dl>

 |
| 

* * *

 |

</div>

##### <a id="x1-750007.2.1"></a>

#### <span class="titlemark">7.2.2</span> <a id="x1-760007.2.2"></a>Diagramme de séquence système

On voit l’ordre de séquencement dans le cas d’utilisation. L’app Natural Corner est vraiment considérée du point de vue de l’utilisateur sans se soucier du fonctionnement internet de l’application. ”Loop” signifie que l’utilisateur introduit les données jusqu’à ce qu’il se conforme à ce que l’application lui renvoie comme indications.

* * *

<div class="figure"><a id="x1-76001r1"></a>

![PIC](10_Volumes_USB_TFE_1_Users_ivymike_Documents_diagramme_sequence_system_gerer_panier.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 7.2.1:</span> <span class="content">Diagramme de séquence système ”Gérer son compte client”</span></div>

</div>

* * *

### <span class="titlemark">7.3</span> <a id="x1-770007.3"></a>UC Recherche des produits

Ce UC est un fondamental de la commande en ligne. Que serait une app de vente sans la facilité de se renseigner sur un produit et de chercher à son aise.

#### <span class="titlemark">7.3.1</span> <a id="x1-780007.3.1"></a>Description

<a id="x1-78001r3"></a>

<div class="longtable">

<colgroup id="TBL-4-1g"><col id="TBL-4-1"></colgroup>
| 

* * *

 |
| 

<span class="paragraphHead"><a id="x1-790003"></a>Description du UC ’Recherche des produits’</span>

 |
| 

* * *

 |
| 

##### <a id="x1-800003"></a><span class="cmr-8">Acteur principal</span>

*   <span class="cmr-8">L’utilisateur</span> <span class="cmr-8">(qu’il</span> <span class="cmr-8">soit</span> <span class="cmr-8">d</span><span class="cmr-8">éj</span><span class="cmr-8">à</span> <span class="cmr-8">client,</span> <span class="cmr-8">ou</span> <span class="cmr-8">simple</span> <span class="cmr-8">visiteur)</span>

##### <a id="x1-810003"></a><span class="cmr-8">Objectifs</span>

*   <span class="cmr-8">L’utilisateur</span> <span class="cmr-8">veut</span> <span class="cmr-8">trouver</span> <span class="cmr-8">le</span> <span class="cmr-8">plus</span> <span class="cmr-8">rapidement</span> <span class="cmr-8">possible</span> <span class="cmr-8">un</span> <span class="cmr-8">produit</span> <span class="cmr-8">pr</span><span class="cmr-8">écis</span> <span class="cmr-8">dans</span> <span class="cmr-8">l’ensemble</span> <span class="cmr-8">du</span> <span class="cmr-8">catalogue.</span> <span class="cmr-8">Il</span> <span class="cmr-8">veut</span> <span class="cmr-8">également</span> <span class="cmr-8">pouvoir</span> <span class="cmr-8">fl</span><span class="cmr-8">âner</span> <span class="cmr-8">comme</span> <span class="cmr-8">il</span> <span class="cmr-8">le</span> <span class="cmr-8">ferait</span> <span class="cmr-8">dans</span> <span class="cmr-8">le</span> <span class="cmr-8">magasin</span> <span class="cmr-8">Natural</span> <span class="cmr-8">Corner</span> <span class="cmr-8">et</span> <span class="cmr-8">chercher</span> <span class="cmr-8">des</span> <span class="cmr-8">produits</span> <span class="cmr-8">avec</span> <span class="cmr-8">des</span> <span class="cmr-8">crit</span><span class="cmr-8">ères</span> <span class="cmr-8">vari</span><span class="cmr-8">és.</span>

##### <a id="x1-820003"></a><span class="cmr-8">Pr</span><span class="cmr-8">éconditions</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">catalogue</span> <span class="cmr-8">est</span> <span class="cmr-8">disponible</span> <span class="cmr-8">(voir</span> <span class="cmr-8">le</span> <span class="cmr-8">cas</span> <span class="cmr-8">d’utilisation</span> <span class="cmr-8">Maintenir</span> <span class="cmr-8">le</span> <span class="cmr-8">catalogue).</span>

##### <a id="x1-830003"></a><span class="cmr-8">Postconditions</span>

*   <span class="cmr-8">L’utilisateur</span> <span class="cmr-8">a</span> <span class="cmr-8">trouv</span><span class="cmr-8">é</span> <span class="cmr-8">le</span> <span class="cmr-8">produit</span> <span class="cmr-8">pr</span><span class="cmr-8">écis</span> <span class="cmr-8">qu’il</span> <span class="cmr-8">cherchait,</span> <span class="cmr-8">ou</span> <span class="cmr-8">un</span> <span class="cmr-8">produit</span> <span class="cmr-8">qui</span> <span class="cmr-8">l’int</span><span class="cmr-8">éresse,</span> <span class="cmr-8">voire</span> <span class="cmr-8">plusieurs.</span>

 |
| 

* * *

 |
| 

##### <a id="x1-840003"></a><span class="cmr-8">Sc</span><span class="cmr-8">énario nominal</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’utilisateur</span> <span class="cmr-8">lance</span> <span class="cmr-8">une</span> <span class="cmr-8">recherche</span> <span class="cmr-8">à</span> <span class="cmr-8">partir</span> <span class="cmr-8">de</span> <span class="cmr-8">mots-cl</span><span class="cmr-8">és</span><span class="frenchb-nbsp"><span class="cmr-8"> </span></span><span class="cmr-8">:</span> <span class="cmr-8">un</span> <span class="cmr-8">nom</span> <span class="cmr-8">de</span> <span class="cmr-8">produit,</span> <span class="cmr-8">un</span> <span class="cmr-8">rayon,</span> <span class="cmr-8">un</span> <span class="cmr-8">aliment</span> <span class="cmr-8">de</span> <span class="cmr-8">la</span> <span class="cmr-8">composition,</span> <span class="cmr-8">une</span> <span class="cmr-8">cat</span><span class="cmr-8">égorie</span> <span class="cmr-8">de</span> <span class="cmr-8">fruit</span> <span class="cmr-8">ou</span> <span class="cmr-8">de</span> <span class="cmr-8">l</span><span class="cmr-8">égume.</span></dd>

<dt class="enumerate-enumitem">2\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">affiche</span> <span class="cmr-8">une</span> <span class="cmr-8">page</span> <span class="cmr-8">de</span> <span class="cmr-8">r</span><span class="cmr-8">ésultat.</span> <span class="cmr-8">Les</span> <span class="cmr-8">produits</span> <span class="cmr-8">sont</span> <span class="cmr-8">class</span><span class="cmr-8">és</span> <span class="cmr-8">par</span> <span class="cmr-8">d</span><span class="cmr-8">éfaut</span> <span class="cmr-8">par</span> <span class="cmr-8">cat</span><span class="cmr-8">égorie.</span></dd>

<dt class="enumerate-enumitem">3\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’utilisateur</span> <span class="cmr-8">s</span><span class="cmr-8">électionne</span> <span class="cmr-8">un</span> <span class="cmr-8">produit.</span></dd>

<dt class="enumerate-enumitem">4\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">lui</span> <span class="cmr-8">pr</span><span class="cmr-8">ésente</span> <span class="cmr-8">une</span> <span class="cmr-8">description</span> <span class="cmr-8">d</span><span class="cmr-8">étaill</span><span class="cmr-8">ée</span> <span class="cmr-8">pour</span> <span class="cmr-8">le</span> <span class="cmr-8">produit</span> <span class="cmr-8">s</span><span class="cmr-8">électionn</span><span class="cmr-8">é.</span> <span class="cmr-8">On</span> <span class="cmr-8">y</span> <span class="cmr-8">trouvera</span> <span class="cmr-8">en</span> <span class="cmr-8">particulier</span><span class="frenchb-nbsp"><span class="cmr-8"> </span></span><span class="cmr-8">:</span></dd>

</dl>

*   <span class="cmr-8">une</span> <span class="cmr-8">image</span> <span class="cmr-8">(pour</span> <span class="cmr-8">la</span> <span class="cmr-8">majorit</span><span class="cmr-8">é</span> <span class="cmr-8">des</span> <span class="cmr-8">produits).</span>
*   <span class="cmr-8">une</span> <span class="cmr-8">description</span> <span class="cmr-8">bio,</span> <span class="cmr-8">la</span> <span class="cmr-8">saison,</span> <span class="cmr-8">la</span> <span class="cmr-8">cat</span><span class="cmr-8">égorie,</span> <span class="cmr-8">le</span> <span class="cmr-8">rayon.</span>
*   <span class="cmr-8">son</span> <span class="cmr-8">prix</span> <span class="cmr-8">et</span> <span class="cmr-8">sa</span> <span class="cmr-8">disponibilit</span><span class="cmr-8">é,</span>

 |
| 

* * *

 |
| 

##### <a id="x1-850003"></a><span class="cmr-8">Alternatives</span>

*   <span class="cmr-8">1a</span> <span class="cmr-8">L’utilisateur</span> <span class="cmr-8">n’a</span> <span class="cmr-8">pas</span> <span class="cmr-8">d’id</span><span class="cmr-8">ée</span> <span class="cmr-8">pr</span><span class="cmr-8">écon</span><span class="cmr-8">çue</span> <span class="cmr-8">et</span> <span class="cmr-8">pr</span><span class="cmr-8">éf</span><span class="cmr-8">ère</span> <span class="cmr-8">fl</span><span class="cmr-8">âner</span> <span class="cmr-8">dans</span> <span class="cmr-8">les</span> <span class="cmr-8">rayons</span> <span class="cmr-8">du</span> <span class="cmr-8">magasin</span> <span class="cmr-8">bio</span> <span class="cmr-8">virtuel.</span> <span class="cmr-8">Pour</span> <span class="cmr-8">cela,</span> <span class="cmr-8">l’application</span> <span class="cmr-8">lui</span> <span class="cmr-8">propose</span> <span class="cmr-8">un</span> <span class="cmr-8">ensemble</span> <span class="cmr-8">de</span> <span class="cmr-8">pages</span> <span class="cmr-8">telles</span> <span class="cmr-8">que</span><span class="frenchb-nbsp"><span class="cmr-8"> </span></span><span class="cmr-8">:</span> <span class="cmr-8">nouveaut</span><span class="cmr-8">és,</span> <span class="cmr-8">meilleures</span> <span class="cmr-8">ventes,</span> <span class="cmr-8">recettes,</span> <span class="cmr-8">promotions.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’utilisateur</span> <span class="cmr-8">navigue</span> <span class="cmr-8">dans</span> <span class="cmr-8">ces</span> <span class="cmr-8">pages</span> <span class="cmr-8">et</span> <span class="cmr-8">peut</span> <span class="cmr-8">encha</span><span class="cmr-8">îner</span> <span class="cmr-8">sur</span> <span class="cmr-8">l’</span><span class="cmr-8">étape</span> <span class="cmr-8">3</span> <span class="cmr-8">du</span> <span class="cmr-8">sc</span><span class="cmr-8">énario</span> <span class="cmr-8">nominal.</span></dd>

</dl>

*   <span class="cmr-8">2a</span> <span class="cmr-8">L’application</span> <span class="cmr-8">n’a</span> <span class="cmr-8">pas</span> <span class="cmr-8">trouv</span><span class="cmr-8">é</span> <span class="cmr-8">de</span> <span class="cmr-8">produits</span> <span class="cmr-8">correspondant</span> <span class="cmr-8">à</span> <span class="cmr-8">la</span> <span class="cmr-8">recherche.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">signale</span> <span class="cmr-8">l’</span><span class="cmr-8">échec</span> <span class="cmr-8">à</span> <span class="cmr-8">l’utilisateur</span> <span class="cmr-8">et</span> <span class="cmr-8">lui</span> <span class="cmr-8">propose</span> <span class="cmr-8">d’effectuer</span> <span class="cmr-8">une</span> <span class="cmr-8">nouvelle</span> <span class="cmr-8">recherche.</span> <span class="cmr-8">Le</span> <span class="cmr-8">cas</span> <span class="cmr-8">d’utilisation</span> <span class="cmr-8">red</span><span class="cmr-8">émarre</span> <span class="cmr-8">à</span> <span class="cmr-8">l’</span><span class="cmr-8">étape</span> <span class="cmr-8">1</span> <span class="cmr-8">du</span> <span class="cmr-8">sc</span><span class="cmr-8">énario</span> <span class="cmr-8">nominal.</span></dd>

</dl>

*   <span class="cmr-8">2b</span> <span class="cmr-8">L’application</span> <span class="cmr-8">a</span> <span class="cmr-8">trouv</span><span class="cmr-8">é</span> <span class="cmr-8">de</span> <span class="cmr-8">tr</span><span class="cmr-8">ès</span> <span class="cmr-8">nombreux</span> <span class="cmr-8">produits.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">signale</span> <span class="cmr-8">le</span> <span class="cmr-8">nombre</span> <span class="cmr-8">de</span> <span class="cmr-8">produits</span> <span class="cmr-8">à</span> <span class="cmr-8">l’utilisateur</span> <span class="cmr-8">et</span> <span class="cmr-8">lui</span> <span class="cmr-8">affiche</span> <span class="cmr-8">une</span> <span class="cmr-8">premi</span><span class="cmr-8">ère</span> <span class="cmr-8">page</span> <span class="cmr-8">de</span> <span class="cmr-8">r</span><span class="cmr-8">ésultats.</span> <span class="cmr-8">Les</span> <span class="cmr-8">autres</span> <span class="cmr-8">pages</span> <span class="cmr-8">sont</span> <span class="cmr-8">accessibles</span> <span class="cmr-8">directement</span> <span class="cmr-8">ou</span> <span class="cmr-8">par</span> <span class="cmr-8">des</span> <span class="cmr-8">symboles</span> <span class="cmr-8">Suivante</span> <span class="cmr-8">et</span> <span class="cmr-8">Pr</span><span class="cmr-8">éc</span><span class="cmr-8">édente.</span></dd>

<dt class="enumerate-enumitem">2\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’utilisateur</span> <span class="cmr-8">navigue</span> <span class="cmr-8">dans</span> <span class="cmr-8">ces</span> <span class="cmr-8">pages</span> <span class="cmr-8">et</span> <span class="cmr-8">encha</span><span class="cmr-8">îne</span> <span class="cmr-8">éventuellement</span> <span class="cmr-8">sur</span> <span class="cmr-8">l’</span><span class="cmr-8">étape</span> <span class="cmr-8">3</span> <span class="cmr-8">du</span> <span class="cmr-8">sc</span><span class="cmr-8">énario</span> <span class="cmr-8">nominal.</span> <span class="cmr-8">Il</span> <span class="cmr-8">peut</span> <span class="cmr-8">également</span> <span class="cmr-8">reclasser</span> <span class="cmr-8">les</span> <span class="cmr-8">produits</span> <span class="cmr-8">obtenus</span> <span class="cmr-8">par</span> <span class="cmr-8">diff</span><span class="cmr-8">érents</span> <span class="cmr-8">crit</span><span class="cmr-8">ères</span><span class="frenchb-nbsp"><span class="cmr-8"> </span></span><span class="cmr-8">:</span> <span class="cmr-8">une</span> <span class="cmr-8">description</span> <span class="cmr-8">bio,</span> <span class="cmr-8">la</span> <span class="cmr-8">saison,</span> <span class="cmr-8">la</span> <span class="cmr-8">cat</span><span class="cmr-8">égorie,</span> <span class="cmr-8">le</span> <span class="cmr-8">rayon,</span> <span class="cmr-8">etc</span></dd>

</dl>

*   <span class="cmr-8">3a</span> <span class="cmr-8">L’utilisateur</span> <span class="cmr-8">n’est</span> <span class="cmr-8">pas</span> <span class="cmr-8">int</span><span class="cmr-8">éress</span><span class="cmr-8">é</span> <span class="cmr-8">par</span> <span class="cmr-8">les</span> <span class="cmr-8">r</span><span class="cmr-8">ésultats.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’utilisateur</span> <span class="cmr-8">revient</span> <span class="cmr-8">à</span> <span class="cmr-8">l’</span><span class="cmr-8">étape</span> <span class="cmr-8">1</span> <span class="cmr-8">du</span> <span class="cmr-8">sc</span><span class="cmr-8">énario</span> <span class="cmr-8">nominal</span> <span class="cmr-8">pour</span> <span class="cmr-8">lancer</span> <span class="cmr-8">une</span> <span class="cmr-8">nouvelle</span> <span class="cmr-8">recherche.</span></dd>

<dt class="enumerate-enumitem">2\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’utilisateur</span> <span class="cmr-8">abandonne</span> <span class="cmr-8">la</span> <span class="cmr-8">recherche.</span> <span class="cmr-8">Le</span> <span class="cmr-8">cas</span> <span class="cmr-8">d’utilisation</span> <span class="cmr-8">se</span> <span class="cmr-8">termine</span> <span class="cmr-8">en</span> <span class="cmr-8">échec.</span></dd>

</dl>

*   <span class="cmr-8">1</span> <span class="cmr-8">L’utilisateur</span> <span class="cmr-8">est</span> <span class="cmr-8">int</span><span class="cmr-8">éress</span><span class="cmr-8">é</span> <span class="cmr-8">par</span> <span class="cmr-8">le</span> <span class="cmr-8">r</span><span class="cmr-8">ésultat</span> <span class="cmr-8">et</span> <span class="cmr-8">met</span> <span class="cmr-8">un</span> <span class="cmr-8">produit</span> <span class="cmr-8">dans</span> <span class="cmr-8">le</span> <span class="cmr-8">panier.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">affiche</span> <span class="cmr-8">le</span> <span class="cmr-8">panier</span> <span class="cmr-8">de</span> <span class="cmr-8">l’utilisateur</span> <span class="cmr-8">(voir</span> <span class="cmr-8">le</span> <span class="cmr-8">cas</span> <span class="cmr-8">d’utilisation</span> <span class="cmr-8">G</span><span class="cmr-8">érer</span> <span class="cmr-8">son</span> <span class="cmr-8">panier).</span></dd>

</dl>

##### <a id="x1-860003"></a><span class="cmr-8">Exigences suppl</span><span class="cmr-8">émentaires</span>

*   <span class="cmr-8">La</span> <span class="cmr-8">qualit</span><span class="cmr-8">é</span> <span class="cmr-8">visuelle</span> <span class="cmr-8">doit</span> <span class="cmr-8">permettre</span> <span class="cmr-8">de</span> <span class="cmr-8">bien</span> <span class="cmr-8">voir</span> <span class="cmr-8">les</span> <span class="cmr-8">produits</span> <span class="cmr-8">et</span> <span class="cmr-8">rendre</span> <span class="cmr-8">la</span> <span class="cmr-8">recherche</span> <span class="cmr-8">agr</span><span class="cmr-8">éable.</span>

 |
| 

* * *

 |

</div>

#### <span class="titlemark">7.3.2</span> <a id="x1-870007.3.2"></a>Diagramme de séquence système

L’instruction ”alt” signifie qu’une alternative aura lieu selon que l’utilisateur trouve un produit ou non. S’il le désire, il mettra le produit ainsi trouvé dans son panier (”opt”).

* * *

<div class="figure"><a id="x1-87001r1"></a>

![PIC](11_Volumes_USB_TFE_Model_Natural_Corner__System___es_produits__sd_Chercher_des_produits_3__1_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 7.3.1:</span> <span class="content">Diagramme de séquence système ”Recherche de produits”</span></div>

</div>

* * *

### <span class="titlemark">7.4</span> <a id="x1-880007.4"></a>UC Gérer son panier

#### <span class="titlemark">7.4.1</span> <a id="x1-890007.4.1"></a>Description

<a id="x1-89001r4"></a>

<div class="longtable">

<colgroup id="TBL-5-1g"><col id="TBL-5-1"></colgroup>
| 

* * *

 |
| 

<span class="paragraphHead"><a id="x1-900004"></a>Description du UC ’Gérer son panier’</span>

 |
| 

* * *

 |
| 

##### <a id="x1-910004"></a><span class="cmr-8">Acteur principal</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">client.</span>

##### <a id="x1-920004"></a><span class="cmr-8">Objectifs</span>

*   <span class="cmr-8">Lorsque</span> <span class="cmr-8">le</span> <span class="cmr-8">client</span> <span class="cmr-8">est</span> <span class="cmr-8">int</span><span class="cmr-8">éress</span><span class="cmr-8">é</span> <span class="cmr-8">par</span> <span class="cmr-8">un</span> <span class="cmr-8">produit,</span> <span class="cmr-8">il</span> <span class="cmr-8">faut</span> <span class="cmr-8">qu’il</span> <span class="cmr-8">puisse</span> <span class="cmr-8">l’enregistrer</span> <span class="cmr-8">dans</span> <span class="cmr-8">un</span> <span class="cmr-8">panier</span> <span class="cmr-8">virtuel.</span> <span class="cmr-8">Ensuite,</span> <span class="cmr-8">il</span> <span class="cmr-8">doit</span> <span class="cmr-8">pouvoir</span> <span class="cmr-8">ajouter</span> <span class="cmr-8">d’autres</span> <span class="cmr-8">aliments,</span> <span class="cmr-8">en</span> <span class="cmr-8">supprimer</span> <span class="cmr-8">ou</span> <span class="cmr-8">encore</span> <span class="cmr-8">en</span> <span class="cmr-8">modifier</span> <span class="cmr-8">les</span> <span class="cmr-8">quantit</span><span class="cmr-8">és</span> <span class="cmr-8">avant</span> <span class="cmr-8">de</span> <span class="cmr-8">passer</span> <span class="cmr-8">commande.</span>

##### <a id="x1-930004"></a><span class="cmr-8">Pr</span><span class="cmr-8">éconditions</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">est</span> <span class="cmr-8">d</span><span class="cmr-8">éj</span><span class="cmr-8">à</span> <span class="cmr-8">enregistr</span><span class="cmr-8">é</span> <span class="cmr-8">et</span> <span class="cmr-8">loggu</span><span class="cmr-8">é.</span>

##### <a id="x1-940004"></a><span class="cmr-8">Postconditions</span>

*   <span class="cmr-8">N</span><span class="cmr-8">éant.</span>

 |
| 

* * *

 |
| 

##### <a id="x1-950004"></a><span class="cmr-8">Sc</span><span class="cmr-8">énario nominal</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">enregistre</span> <span class="cmr-8">les</span> <span class="cmr-8">produits</span> <span class="cmr-8">qui</span> <span class="cmr-8">l’int</span><span class="cmr-8">éressent</span> <span class="cmr-8">dans</span> <span class="cmr-8">un</span> <span class="cmr-8">panier</span> <span class="cmr-8">virtuel</span> <span class="cmr-8">(voir</span> <span class="cmr-8">le</span> <span class="cmr-8">cas</span> <span class="cmr-8">d’utilisation</span> <span class="cmr-8">Chercher</span> <span class="cmr-8">des</span> <span class="cmr-8">produits).</span></dd>

<dt class="enumerate-enumitem">2\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L”application</span> <span class="cmr-8">lui</span> <span class="cmr-8">affiche</span> <span class="cmr-8">l’</span><span class="cmr-8">état</span> <span class="cmr-8">de</span> <span class="cmr-8">son</span> <span class="cmr-8">panier.</span> <span class="cmr-8">Chaque</span> <span class="cmr-8">produit</span> <span class="cmr-8">qui</span> <span class="cmr-8">a</span> <span class="cmr-8">ét</span><span class="cmr-8">é</span> <span class="cmr-8">pr</span><span class="cmr-8">éalablement</span> <span class="cmr-8">s</span><span class="cmr-8">électionn</span><span class="cmr-8">é</span> <span class="cmr-8">est</span> <span class="cmr-8">pr</span><span class="cmr-8">ésent</span><span class="cmr-8">é</span> <span class="cmr-8">sur</span> <span class="cmr-8">une</span> <span class="cmr-8">ligne,</span> <span class="cmr-8">avec</span> <span class="cmr-8">son</span> <span class="cmr-8">titre,</span> <span class="cmr-8">sa</span> <span class="cmr-8">cat</span><span class="cmr-8">égorie</span> <span class="cmr-8">et</span> <span class="cmr-8">son</span> <span class="cmr-8">rayon.</span> <span class="cmr-8">Son</span> <span class="cmr-8">prix</span> <span class="cmr-8">unitaire</span> <span class="cmr-8">est</span> <span class="cmr-8">affich</span><span class="cmr-8">é,</span> <span class="cmr-8">la</span> <span class="cmr-8">quantit</span><span class="cmr-8">é</span> <span class="cmr-8">est</span> <span class="cmr-8">positionn</span><span class="cmr-8">ée</span> <span class="cmr-8">à</span> <span class="cmr-8">’1’</span> <span class="cmr-8">par</span> <span class="cmr-8">d</span><span class="cmr-8">éfaut,</span> <span class="cmr-8">et</span> <span class="cmr-8">le</span> <span class="cmr-8">prix</span> <span class="cmr-8">total</span> <span class="cmr-8">de</span> <span class="cmr-8">la</span> <span class="cmr-8">ligne</span> <span class="cmr-8">est</span> <span class="cmr-8">calcul</span><span class="cmr-8">é.</span> <span class="cmr-8">Le</span> <span class="cmr-8">total</span> <span class="cmr-8">g</span><span class="cmr-8">én</span><span class="cmr-8">éral</span> <span class="cmr-8">est</span> <span class="cmr-8">calcul</span><span class="cmr-8">é</span> <span class="cmr-8">par</span> <span class="cmr-8">l’application</span> <span class="cmr-8">et</span> <span class="cmr-8">affich</span><span class="cmr-8">é</span> <span class="cmr-8">en</span> <span class="cmr-8">bas</span> <span class="cmr-8">du</span> <span class="cmr-8">panier,</span> <span class="cmr-8">avec</span> <span class="cmr-8">le</span> <span class="cmr-8">nombre</span> <span class="cmr-8">d’articles.</span></dd>

<dt class="enumerate-enumitem">3\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">continue</span> <span class="cmr-8">ses</span> <span class="cmr-8">achats</span> <span class="cmr-8">(voir</span> <span class="cmr-8">le</span> <span class="cmr-8">cas</span> <span class="cmr-8">d’utilisation</span> <span class="cmr-8">Chercher</span> <span class="cmr-8">des</span> <span class="cmr-8">produits).</span></dd>

</dl>

 |
| 

* * *

 |
| 

##### <a id="x1-960004"></a><span class="cmr-8">Alternatives</span>

*   <span class="cmr-8">2a</span> <span class="cmr-8">Le</span> <span class="cmr-8">panier</span> <span class="cmr-8">est</span> <span class="cmr-8">vide.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">l’application</span> <span class="cmr-8">affiche</span> <span class="cmr-8">un</span> <span class="cmr-8">message</span> <span class="cmr-8">d’erreur</span> <span class="cmr-8">au</span> <span class="cmr-8">client</span> <span class="cmr-8">(</span><span class="cmsy-5">≪</span> <span class="cmr-8">Votre</span> <span class="cmr-8">panier</span> <span class="cmr-8">est</span> <span class="cmr-8">vide</span> <span class="cmsy-5">≫</span><span class="cmr-8">)</span> <span class="cmr-8">et</span> <span class="cmr-8">lui</span> <span class="cmr-8">propose</span> <span class="cmr-8">de</span> <span class="cmr-8">revenir</span> <span class="cmr-8">à</span> <span class="cmr-8">une</span> <span class="cmr-8">recherche</span> <span class="cmr-8">de</span> <span class="cmr-8">produit</span> <span class="cmr-8">(voir</span> <span class="cmr-8">le</span> <span class="cmr-8">cas</span> <span class="cmr-8">d’utilisation</span> <span class="cmr-8">Chercher</span> <span class="cmr-8">des</span> <span class="cmr-8">produits).</span></dd>

</dl>

*   <span class="cmr-8">4a</span> <span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">modifie</span> <span class="cmr-8">les</span> <span class="cmr-8">quantit</span><span class="cmr-8">és</span> <span class="cmr-8">des</span> <span class="cmr-8">lignes</span> <span class="cmr-8">du</span> <span class="cmr-8">panier,</span> <span class="cmr-8">ou</span> <span class="cmr-8">en</span> <span class="cmr-8">supprime.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">revalide</span> <span class="cmr-8">en</span> <span class="cmr-8">demandant</span> <span class="cmr-8">la</span> <span class="cmr-8">mise</span> <span class="cmr-8">à</span> <span class="cmr-8">jour</span> <span class="cmr-8">du</span> <span class="cmr-8">panier.</span></dd>

<dt class="enumerate-enumitem">2\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">cas</span> <span class="cmr-8">d’utilisation</span> <span class="cmr-8">reprend</span> <span class="cmr-8">à</span> <span class="cmr-8">l’</span><span class="cmr-8">étape</span> <span class="cmr-8">2</span> <span class="cmr-8">du</span> <span class="cmr-8">sc</span><span class="cmr-8">énario</span> <span class="cmr-8">nominal.</span></dd>

</dl>

*   <span class="cmr-8">1</span> <span class="cmr-8">Le</span> <span class="cmr-8">client</span> <span class="cmr-8">souhaite</span> <span class="cmr-8">commander</span> <span class="cmr-8">en</span> <span class="cmr-8">ligne.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">l’am</span><span class="cmr-8">ène</span> <span class="cmr-8">sur</span> <span class="cmr-8">la</span> <span class="cmr-8">page</span> <span class="cmr-8">de</span> <span class="cmr-8">validation</span> <span class="cmr-8">de</span> <span class="cmr-8">commande.</span></dd>

</dl>

##### <a id="x1-970004"></a><span class="cmr-8">Exigences suppl</span><span class="cmr-8">émentaires</span>

*   <span class="cmr-8">S’assurer</span> <span class="cmr-8">que</span> <span class="cmr-8">l’int</span><span class="cmr-8">égrit</span><span class="cmr-8">é</span> <span class="cmr-8">des</span> <span class="cmr-8">donn</span><span class="cmr-8">ées</span> <span class="cmr-8">soit</span> <span class="cmr-8">assur</span><span class="cmr-8">ée</span> <span class="cmr-8">(calculs,</span> <span class="cmr-8">contenu</span> <span class="cmr-8">du</span> <span class="cmr-8">panier,</span> <span class="cmr-8">sauvegarde</span> <span class="cmr-8">de</span> <span class="cmr-8">celui-ci).</span>

 |
| 

* * *

 |

</div>

#### <span class="titlemark">7.4.2</span> <a id="x1-980007.4.2"></a>Diagramme de séquence système

On part du principe que l’utilisateur est déjà passé par le UC ”Chercher des articles” (”ref”).

* * *

<div class="figure"><a id="x1-98001r1"></a>

![PIC](12_Volumes_USB_TFE_sd__Ge__rer_son_panier.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 7.4.1:</span> <span class="content">Diagramme de séquence système ”Gérer son panier”</span></div>

</div>

* * *

### <span class="titlemark">7.5</span> <a id="x1-990007.5"></a>UC Commander

#### <span class="titlemark">7.5.1</span> <a id="x1-1000007.5.1"></a>Description

<a id="x1-100001r5"></a>

<div class="longtable">

<colgroup id="TBL-6-1g"><col id="TBL-6-1"></colgroup>
| 

* * *

 |
| 

<span class="paragraphHead"><a id="x1-1010005"></a>Description du UC ’Commander’</span>

 |
| 

* * *

 |
| 

##### <a id="x1-1020005"></a><span class="cmr-8">Acteur principal</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">Client.</span>

##### <a id="x1-1030005"></a><span class="cmr-8">Objectifs</span>

*   <span class="cmr-8">À</span> <span class="cmr-8">tout</span> <span class="cmr-8">moment,</span> <span class="cmr-8">le</span> <span class="cmr-8">client</span> <span class="cmr-8">doit</span> <span class="cmr-8">pouvoir</span> <span class="cmr-8">acc</span><span class="cmr-8">éder</span> <span class="cmr-8">à</span> <span class="cmr-8">la</span> <span class="cmr-8">page</span> <span class="cmr-8">de</span> <span class="cmr-8">commande,</span> <span class="cmr-8">dans</span> <span class="cmr-8">lequel</span> <span class="cmr-8">il</span> <span class="cmr-8">peut</span> <span class="cmr-8">saisir</span> <span class="cmr-8">ses</span> <span class="cmr-8">coordonn</span><span class="cmr-8">ées</span> <span class="cmr-8">et</span> <span class="cmr-8">les</span> <span class="cmr-8">informations</span> <span class="cmr-8">n</span><span class="cmr-8">écessaires</span> <span class="cmr-8">au</span> <span class="cmr-8">retrait</span> <span class="cmr-8">en</span> <span class="cmr-8">magasin.</span>

##### <a id="x1-1040005"></a><span class="cmr-8">Pr</span><span class="cmr-8">éconditions</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">panier</span> <span class="cmr-8">du</span> <span class="cmr-8">client</span> <span class="cmr-8">n’est</span> <span class="cmr-8">pas</span> <span class="cmr-8">vide.</span>

##### <a id="x1-1050005"></a><span class="cmr-8">Postconditions</span>

*   <span class="cmr-8">Une</span> <span class="cmr-8">commande</span> <span class="cmr-8">a</span> <span class="cmr-8">ét</span><span class="cmr-8">é</span> <span class="cmr-8">enregistr</span><span class="cmr-8">ée</span> <span class="cmr-8">et</span> <span class="cmr-8">transmise</span> <span class="cmr-8">à</span> <span class="cmr-8">Natural</span> <span class="cmr-8">Corner.</span>

 |
| 

* * *

 |
| 

##### <a id="x1-1060005"></a><span class="cmr-8">Sc</span><span class="cmr-8">énario nominal</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">Client</span> <span class="cmr-8">saisit</span> <span class="cmr-8">l’ensemble</span> <span class="cmr-8">des</span> <span class="cmr-8">informations</span> <span class="cmr-8">n</span><span class="cmr-8">écessaires</span> <span class="cmr-8">à</span> <span class="cmr-8">la</span> <span class="cmr-8">garantie</span> <span class="cmr-8">de</span> <span class="cmr-8">venir</span> <span class="cmr-8">chercher</span> <span class="cmr-8">son</span> <span class="cmr-8">panier,</span> <span class="cmr-8">à</span> <span class="cmr-8">savoir</span><span class="frenchb-nbsp"><span class="cmr-8"> </span></span><span class="cmr-8">:</span> <span class="cmr-8">les</span> <span class="cmr-8">coordonn</span><span class="cmr-8">ées</span> <span class="cmr-8">de</span> <span class="cmr-8">l’adresse</span> <span class="cmr-8">du</span> <span class="cmr-8">client</span> <span class="cmr-8">(nom,</span> <span class="cmr-8">pr</span><span class="cmr-8">énom,</span> <span class="cmr-8">adresse</span> <span class="cmr-8">postale</span> <span class="cmr-8">compl</span><span class="cmr-8">ète,</span> <span class="cmr-8">t</span><span class="cmr-8">él</span><span class="cmr-8">éphone).</span></dd>

<dt class="enumerate-enumitem">2\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">affiche</span> <span class="cmr-8">un</span> <span class="cmr-8">r</span><span class="cmr-8">écapitulatif</span> <span class="cmr-8">des</span> <span class="cmr-8">adresses</span> <span class="cmr-8">indiqu</span><span class="cmr-8">ées</span> <span class="cmr-8">et</span> <span class="cmr-8">du</span> <span class="cmr-8">panier</span> <span class="cmr-8">à</span> <span class="cmr-8">venir</span> <span class="cmr-8">chercher.</span></dd>

<dt class="enumerate-enumitem">3\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">confirme</span> <span class="cmr-8">la</span> <span class="cmr-8">prise</span> <span class="cmr-8">de</span> <span class="cmr-8">commande</span> <span class="cmr-8">au</span> <span class="cmr-8">client.</span></dd>

<dt class="enumerate-enumitem">4\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">envoie</span> <span class="cmr-8">la</span> <span class="cmr-8">commande</span> <span class="cmr-8">valid</span><span class="cmr-8">ée</span> <span class="cmr-8">aux</span> <span class="cmr-8">vendeurs</span> <span class="cmr-8">de</span> <span class="cmr-8">Natural</span> <span class="cmr-8">Corner.</span></dd>

<dt class="enumerate-enumitem">5\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">confirme</span> <span class="cmr-8">la</span> <span class="cmr-8">commande</span> <span class="cmr-8">au</span> <span class="cmr-8">client.</span></dd>

</dl>

 |
| 

* * *

 |
| 

##### <a id="x1-1070005"></a><span class="cmr-8">Alternatives</span>

*   <span class="cmr-8">1-3a</span> <span class="cmr-8">Le</span> <span class="cmr-8">Client</span> <span class="cmr-8">annule</span> <span class="cmr-8">sa</span> <span class="cmr-8">commande.</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">L’application</span> <span class="cmr-8">revient</span> <span class="cmr-8">sur</span> <span class="cmr-8">l’affichage</span> <span class="cmr-8">du</span> <span class="cmr-8">panier</span> <span class="cmr-8">et</span> <span class="cmr-8">le</span> <span class="cmr-8">cas</span> <span class="cmr-8">d’utilisation</span> <span class="cmr-8">se</span> <span class="cmr-8">termine</span> <span class="cmr-8">en</span> <span class="cmr-8">échec.</span></dd>

</dl>

 |
| 

* * *

 |

</div>

#### <span class="titlemark">7.5.2</span> <a id="x1-1080007.5.2"></a>Diagramme de séquence système

Une précondition a été ajoutée, le panier doit être rempli par au moins un article pour être commandé. Le vendeur intervient comme utilisateur secondaire.

* * *

<div class="figure"><a id="x1-108001r1"></a>

![PIC](13_Volumes_USB_TFE_Model_Natural_Corner__System_sequence_diagram__Commander__sd_Commander_5.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 7.5.1:</span> <span class="content">Diagramme de séquence système ”Commander”</span></div>

</div>

* * *

### <span class="titlemark">7.6</span> <a id="x1-1090007.6"></a>UC Maintenir le catalogue

#### <span class="titlemark">7.6.1</span> <a id="x1-1100007.6.1"></a>Description

<a id="x1-110001r6"></a>

<div class="longtable">

<colgroup id="TBL-7-1g"><col id="TBL-7-1"></colgroup>
| 

* * *

 |
| 

<span class="paragraphHead"><a id="x1-1110006"></a>Description UC Maintenir le catalogue</span>

 |
| 

* * *

 |
| 

##### <a id="x1-1120006"></a><span class="cmr-8">Acteur principal</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">vendeur.</span>

##### <a id="x1-1130006"></a><span class="cmr-8">Acteur secondaire</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">catalogue.</span>

##### <a id="x1-1140006"></a><span class="cmr-8">Objectifs</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">vendeur</span> <span class="cmr-8">veut</span> <span class="cmr-8">mettre</span> <span class="cmr-8">à</span> <span class="cmr-8">jour</span> <span class="cmr-8">le</span> <span class="cmr-8">catalogue</span> <span class="cmr-8">avec</span> <span class="cmr-8">de</span> <span class="cmr-8">nouveaux</span> <span class="cmr-8">produits</span> <span class="cmr-8">et</span> <span class="cmr-8">certaines</span> <span class="cmr-8">informations</span> <span class="cmr-8">sur</span> <span class="cmr-8">les</span> <span class="cmr-8">produits.</span>

##### <a id="x1-1150006"></a><span class="cmr-8">Pr</span><span class="cmr-8">éconditions</span>

*   <span class="cmr-8">Le</span> <span class="cmr-8">vendeur</span> <span class="cmr-8">s’est</span> <span class="cmr-8">authentifi</span><span class="cmr-8">é.</span>
*   <span class="cmr-8">Le</span> <span class="cmr-8">catalogue</span> <span class="cmr-8">est</span> <span class="cmr-8">accessible.</span>

##### <a id="x1-1160006"></a><span class="cmr-8">Postconditions</span>

*   <span class="cmr-8">Une</span> <span class="cmr-8">nouvelle</span> <span class="cmr-8">version</span> <span class="cmr-8">du</span> <span class="cmr-8">catalogue</span> <span class="cmr-8">est</span> <span class="cmr-8">disponible.</span>

 |
| 

* * *

 |
| 

##### <a id="x1-1170006"></a><span class="cmr-8">Sc</span><span class="cmr-8">énario nominal</span>

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem"><span class="cmr-8">Le</span> <span class="cmr-8">vendeur</span> <span class="cmr-8">introduit</span> <span class="cmr-8">un</span> <span class="cmr-8">nouveau</span> <span class="cmr-8">produit</span> <span class="cmr-8">dans</span> <span class="cmr-8">le</span> <span class="cmr-8">catalogue.</span></dd>

</dl>

 |
| 

* * *

 |
| 

##### <a id="x1-1180006"></a><span class="cmr-8">Alternatives</span>

*   <span class="cmr-8">1a</span> <span class="cmr-8">Le</span> <span class="cmr-8">vendeur</span> <span class="cmr-8">met</span> <span class="cmr-8">à</span> <span class="cmr-8">jour</span> <span class="cmr-8">un</span> <span class="cmr-8">produit.</span>

 |
| 

* * *

 |

</div>

#### <span class="titlemark">7.6.2</span> <a id="x1-1190007.6.2"></a>Diagramme de séquence système

* * *

<div class="figure"><a id="x1-119001r1"></a>

![PIC](14_Volumes_USB_TFE_Model_Natural_Corner__System___r_le_catalogue__sd_Maintenir_le_catalogue_6.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 7.6.1:</span> <span class="content">Diagramme de séquence système ”Maintenir catalogue”</span></div>

</div>

* * *

# <span class="titlemark">Quatrième partie 
</span><a id="x1-1200007.6.2"></a>Classes d’analyse et base de données

## <span class="titlemark">Chapitre 8</span>
<a id="x1-1210008"></a>Conception objet des classes d’analyse

### <span class="titlemark">8.1</span> <a id="x1-1220008.1"></a>Classes d’analyse

#### <span class="titlemark">8.1.1</span> <a id="x1-1230008.1.1"></a>Identification des concepts du domaine

Quels sont les concepts métiers qui correspondent à ces cas d’utilisation<span class="frenchb-thinspace"> </span>? Pour le cas d’utilisation ”Créer son compte”, il va de soi que le concept ”Utilisateur” est pertinent. Il faut de plus prendre en compte l’existence des différents utilisateurs du système ”Natural Corner”, c’est à dire les vendeurs, le gérant, l’internaute simple visiteur, l’internaute client identifié. L’analyse des Uses Cases nous a permis de différencier le système Natural Corner depuis le point de vue d’un client (potentiel ou actuel) et du point de vue du gérant et des vendeurs. Un choix d’analyse consiste à créer une classe “Utilisateur” qui concernera un utilisateur identifié, qu’il soit client ou non. Il ne s’agit pas ici de fonctionner à la manière d’un site web d’achat traditionnel mais plutôt d’inciter le client à utiliser l’application calquée sur les “Apps” pour smartphone. Les utilisateurs sont désormais habitués à s’identifier d’emblée avant la première utilisation d’une application. Un utilisateur sera donc un concept dont pourront dériver les concepts de vendeur et gérant car ils vont partager des attributs similaires.

Un autre concept intéressant est celui d’adresse qui permet de factoriser le concept d’utilisateur, ce concept possédant plusieurs caractéristiques aisément identifiables en attributs. Ne perdons pas de vue par ailleurs que le gérant du magasin Natural Corner a clairement demandé lors de l’analyse des besoins une identification par le réseau social Facebook.Voici les concepts métiers qui se dégagent<span class="frenchb-nbsp"> </span>:

*   utilisateur,
*   vendeur,
*   gérant,
*   adresse

Le cas d’utilisation ”Recherche produits” suggère le concept d’article. Il faut de plus pouvoir ranger un article dans un rayon comme l’indique le fichier transmis par le gérant du magasin et, enfin, il est agréable pour un utilisateur de l’application de chercher ses articles favoris par catégorie. Voici les concepts métiers identifiés<span class="frenchb-nbsp"> </span>:

*   article,
*   rayon,
*   catégorie

Nous apprenons du UC ”Gérer panier” qu’un candidat à l’univers conceptuel de l’application Natural Corner est celui de panier. Il s’agit du panier qu’utiliserait un client dans un magasin d’alimentation. Ce panier est rempli d’articles. Pour donner de l’ordre à ce panier et pouvoir différencier les articles, connaitre leurs nombres et en calculer le prix total, il est intéressant d’utiliser le concept de ligne de panier. Ainsi,

*   panier,
*   ligne panier

De l’UC ”Commander”, le concept de commande apparaît presque immédiatement<span class="frenchb-nbsp"> </span>:

*   commande

#### <span class="titlemark">8.1.2</span> <a id="x1-1240008.1.2"></a>Ajout des associations et des attributs

Un utilisateur peut se caractériser par les attributs prénom, nom, pseudonyme, mot de passe, adresse e-mail. On peut lui ajouter une date d’inscription pour avoir des informations supplémentaires et aussi son adresse IP à des fins statistiques (pays à partir duquel l’utilisateur se connecte à l’application par exemple).

Une adresse contient une rue (place, chaussée, avenue, etc...), une numéro, une code postal, une localité et un pays (par défaut Belgique). Un utilisateur n’utilise qu’une seule adresse et même si une même adresse peut être utilisée par plusieurs personnes (familles, colocataires), on limitera l’univers conceptuel à un utilisateur par adresse et une adresse par utilisateur . La classe Adresse est une factorisation clarifiant la classe Utilisateur et qui servira le cas échéant à d’autres classes à venir.

Nous résumons ces réflexion par une relation de composition entre les classes Utilisateur et Adresse. Un vendeur est un utilisateur qui a certains droits d’accès supplémentaires du point de vue du catalogue des produits et du système Natural Corner. Un gérant est un vendeur qui peut éditer des commentaires informatifs et notifier les clients des nouvelles promos. Voici un premier jet des classes d’analyse<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-124001r1"></a>

![PIC](15_Volumes_USB_TFE_classes_utilisateur.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 8.1.1:</span> <span class="content">Classes d’analyse des UC ”Créer son compte client” et”Gérer son compte client”</span></div>

</div>

* * *

Le choix du type des classes obéit à une logique de facilité d’implémentation et de flexibilité. Un numéro de maison peut être ”6 a”, ce qu’un type integer ne peut contenir. Un code postal peut commencer par zéro en France (exemple<span class="frenchb-nbsp"> </span>: 01330, Amberieux-en-dombes, Ain, Rhône-Alpes), de même pour un numéro de téléphone. Initialiser à ”Belgique” par défaut à la variable ”pays” pour faciliter l’encodage. Un horodatage est plus précis qu’une date pour la date d’inscription.

Le schématisme UML2 permet de représenter directement un attribut de la classe Utilisateur à l’aide d’une relation avec la classe Adresse. Une adresse contient aussi un numéro de boite. Les classes Vendeur et Gérant sont des classes vides à ce niveau d’analyse mais pourront être plus sophistiquées dans le futur. Le concept d’héritage permet dans ce cas ci d’enrichir les classes Vendeur et Gérant en fonction de l’analyse des besoins ultérieure sans devoir toucher à la classe Utilisateur. La navigabilité va dans le sens de la classe Utilisateur vers la classe Adresse. La classe Adresse n’a pas à avoir accès aux données de la classe Utilisateur.

Pour trouver les entités intéressantes, je me suis inspiré d’un document remis par le gérant du magasin. On peut y voir le mot Porte 1 qui correspond au rayon. Le numéro de cinq chiffres n’a pas été gardé pour l’application car elle ne semble pas intéressante pour la logique métier. La catégorie a par contre été ajoutée pour l’application afin de faciliter la recherche du client dans le catalogue.

* * *

<div class="figure"><a id="x1-124002r2"></a>

![PIC](16_Volumes_USB_TFE_Screen_Shot_2016-05-15_at_21_51_44.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 8.1.2:</span> <span class="content">Echantillon de la liste des produits frais</span></div>

</div>

* * *

Pour l’UC ”Rechercher un produit”, un article a une dénomination, un prix unitaire, peut être en promo ou indisponible et possède un commentaire écrit par le gérant du magasin. Un rayon a une dénomination correspondant aux portes ou l’emplacement, comme l’on peut le voir sur le fichier cvs fournit par le gérant du magasin ”Natural Corner”. La catégorie a une dénomination correspondant aux catégories habituelles dans le secteur agro-alimentaire pour les fruits et légumes et autres produits frais.

* * *

<div class="figure"><a id="x1-124003r3"></a>

![PIC](17_Volumes_USB_TFE_Article.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 8.1.3:</span> <span class="content">Classes d’analyse de l’UC ”Chercher produit”</span></div>

</div>

* * *

Il a été décidé après une lecture de différents forums en ligne que la variable prix unitaire sera de type Integer lors de l’implémentation [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE31.html#fn1x8)<a id="x1-124004f1"></a>. L’argument semble convainquant. En effet, un float n’est jamais qu’une approximation et les tests de type ”if” sont biaisés avec ce type. Utiliser le type Integer qu’on multiplie par cent par la suite (centimes vers Euros), est une manière de ne pas perdre l’intégrité de l’information du sytème.

Un article peut appartenir à plusieurs catégories selon le point de vue d’un magasin bio (le concombre est un légume mais aussi une produit frais, un légume vert, un légume prévu pour des shakes santé et même un cosmétique). Une catégorie contient parfois des sous-catégorie (produits frais <span class="cmmi-10">></span> légumes de saison <span class="cmmi-10">></span> légumes verts <span class="cmmi-10">></span> ...). Nous introduisons cette idée à l’aide d’une association réflexive nommée ”sous-catégorie”. Les rayons étant séparés spatialement, nous pouvons établir une relation de composition entre Article et Rayon. Un rayon possède plusieurs articles, un article n’est rangé que dans un seul rayon.

Un panier a un certain nombre d’article et une valeur totale. Ces deux attributs sont en réalité dérivés car ils se calculent à partir des lignes de panier. Il en va de même pour l’attribut montant de la classe LignePanier, le montant d’une ligne est le produit du nombre d’articles de la ligne et du prix unitaire de cet article.

* * *

<div class="figure"><a id="x1-124005r4"></a>

![PIC](18_Volumes_USB_TFE_panier.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 8.1.4:</span> <span class="content">Classes d’analyse de l’UC ”Gérer panier”</span></div>

</div>

* * *

La navigabilité rend étanche le sens de navigation d’article vers lignePanier. En effet, la conception objet nous suggère de limiter le plus possible la connaissance des classes entre elles. ”Ordered” car il s’agit d’une liste numérotée de lignes de Panier. Une relation de composition avec Panier au lieu d’une agrégation puisque un Panier décide de construire une ligne de panier et aussi de sa destruction.

La classe commande possède un horodatage correspondant au moment de la commande, un délais de collecte pour le client et un montant total dérivé et calculé à partir du panier.

* * *

<div class="figure"><a id="x1-124006r5"></a>

![PIC](19_Volumes_USB_TFE_commande.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 8.1.5:</span> <span class="content">Classes d’analyse de l’UC ”Commander”</span></div>

</div>

* * *

## <span class="titlemark">Chapitre 9</span>
<a id="x1-1250009"></a>Base de données

### <span class="titlemark">9.1</span> <a id="x1-1260009.1"></a>Conception

Tout l’enjeu de cette base de données est de donner des tables permettant de tester le backend et la persistance des données en respectant le modèle objet des classes d’analyse. En effet, ”la correspondance des données entre le modèle relationnel et le modèle objet doit faire face à plusieurs problèmes<span class="frenchb-nbsp"> </span>: le modèle objet propose plus de fonctionnalités<span class="frenchb-nbsp"> </span>: héritage, polymorphisme, ... les relations entre les entités des deux modèles sont différentes un objet ne possède pas d’identifiant en standard (hormis son adresse mémoire qui varie d’une exécution à l’autre). Dans le modèle relationnel, chaque occurrence devrait posséder un identifiant unique” [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE32.html#fn1x9)<a id="x1-126001f1"></a>. Comme nous nous passons d’une couche logicielle permettant d’effectuer le pont entre le modèle objet de l’application et le modèle relationnel de la base de données (ORM), c’est en amont du code, au moment de la conception de la base de données, qu’il faut y penser de manière adéquate pour éviter des problèmes d’implémentation par la suite [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">2</sup>](TFE33.html#fn2x9)<a id="x1-126002f2"></a>.

Reprenons<span class="frenchb-nbsp"> </span>: un objet est instancié par son constructeur et, à ce moment, un premier choix d’implémentation consiste à fournir à l’attribut d’instance _id la valeur d’un attribut de classe static_id automatiquement incrémenté. Chaque nouvelle instanciation de la classe se verra attribuer un nouvel identifiant. Au moment de l’insertion de l’objet dans la base de données, on introduit l’id en lieu et place du champ ID. Cependant le choix conceptuel du modèle relationnel impose l’utilisation d’une clé auto-incrémentée. Etant donné qu’il n’y a pas de translation directe entre cette auto-incrémentation garantissant l’unicité des lignes de la table et l’identifiant arbitraire des objets de l’application, l’insertion rate.

Il faut donc trouver une solution convenable pour garantir la liaison objet-relationnelle. En PHP, les objets sont passés par référence en paramètre aux méthodes. La méthode se chargeant d’ajouter un objet dans la base de données utilisera son mutateur setId($id). L’objet, après avoir été enregistré dans la base, sera utilisé par l’application avec le même id que celui de la base de données.

La conception de la base de données suit de près la conception objet de l’application Natural Corner. Voici la description détaillée de la modélisation<span class="frenchb-nbsp"> </span>:

*   Un utilisateur passe une commande
    *   Deux entités (”utilisateurs” et ”commandes”) reliées par une association (”passer”).
    *   Un utilisateur peut ne passer aucune commande (Cardinalité 0).
    *   Un utilisateur peut passer plusieurs commandes (Cardinalité n).
    *   Une commande est passée par un et un seul utilisateur (Cardinalité min 1 et max 1).
*   Un panier donne lieu à une commande
    *   Deux entités (”paniers” et ”commandes”) reliées par une association (”donner lieu à”).
    *   Un panier peut donner lieu à aucune commande (Cardinalité 0).
    *   Un panier peut donner lieu au plus à une commande (Cardinalité 1).
    *   Une commande a été donné lieu par un et un seul panier (Cardinalité min 1 et max 1).
*   Un panier contient des lignes de panier.
    *   Deux entités (”paniers” et ”lignes panier”) reliées par une association (”contenir”).
    *   Un panier peut ne pas contenir de ligne de panier (Cardinalité 0).
    *   Un panier peut contenir plusieurs lignes de panier(Cardinalité n).
    *   Une ligne de panier est contenu par un et un seul panier (Cardinalité min 1 et max 1).
*   Un article concerne une ligne de panier.
    *   Deux entités (”lignes panier” et ”articles”) reliées par une association (”concerner”).
    *   Un article peut ne concerner aucune ligne de panier (Cardinalité 0).
    *   Un article peut être concerné par plusieurs lignes de panier (Cardinalité n).
    *   Une ligne de panier est concerné par un et un seul article (Cardinalité min 1 et max 1).
*   Un article appartient à un rayon
    *   Deux entités (”rayons” et ”articles”) reliées par une association (”appartenir à”).
    *   Un article appartient à un et un seul rayon (Cardinalité min 1 et max 1).
    *   Un rayon peut n’avoir aucun article (Cardinalité 0).
    *   Un rayon contient plusieurs articles (Cardinalité n).
*   Un article appartient à une catégorie
    *   Deux entités (”catégorie” et ”articles”) reliées par une association (”appartenir à”).
    *   Un article appartient au moins à une catégorie (Cardinalité 1).
    *   Un article appartient peut appartenir à plusieurs catégories (Cardinalité n).
    *   Une catégorie peut ne s’appliquer à aucun article (Cardinalité 0).
    *   Une catégorie peut s’appliquer à plusieurs articles (Cardinalité n).
*   Une catégorie catégorise une autre catégorie.
    *   Une entité (”catégorie”) reliée par une association (”catégorise”).
    *   Une catégorie peut ne pas appartenir à une autre catégorie (Cardinalité 0).
    *   Une catégorie peut appartenir à plusieurs autres catégories (Cardinalité n).
    *   Une catégorie peut ne catégoriser aucune catégorie (Cardinalité 0).
    *   Une catégorie peut catégoriser plusieurs autres catégories (Cardinalité n).
*   Un vendeur est un utilisateur.
    *   Deux entités (”utilisateur” et ”vendeurs”) reliés par une relation d’héritage.
*   Un gérant est un vendeur.
    *   Deux entités (”gérant” et ”vendeurs”) reliés par une relation d’héritage.

### <span class="titlemark">9.2</span> <a id="x1-1270009.2"></a>Modèle conceptuel de données (MCD)

Une traduction conceptuelle comme fruit de ces réflexions.

* * *

<div class="figure"><a id="x1-127001r1"></a>

![PIC](20_Volumes_USB_TFE_NC_BDD.jpg)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 9.2.1:</span> <span class="content">MCD de la base de données</span></div>

</div>

* * *

### <span class="titlemark">9.3</span> <a id="x1-1280009.3"></a>Modèle logique de données (MLD)

La traduction a été effectuée en partie par le logicle JMerise [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">3</sup>](TFE34.html#fn3x9)<a id="x1-128001f3"></a>.

* * *

<div class="figure"><a id="x1-128002r1"></a>

![PIC](21_Volumes_USB_TFE_NC_BDD_MLD.jpg)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 9.3.1:</span> <span class="content">MLD de la base de données</span></div>

</div>

* * *

### <span class="titlemark">9.4</span> <a id="x1-1290009.4"></a>Réflexions sur la conception de la base de données

Il n’a pas été aisé de réaliser la conception. Il fallait notamment que la base de données corresponde à la conception orientée objet. D’autre part, la réalisation de l’application étant incrémentale et se perfectionne au fur et à mesure des itérations, il a fallu remanier à plusieurs reprises la base de données. Par exemple, il n’y avait pas de classe Adresse au début de la conception et l’application a d’abord été écrite en n’utilisant qu’un seul champ pour la rue ou le numéro de boîte. Après analyse et perfectionnement, il a semblé plus judicieux de créer une classe Adresse réutilisable. La difficulté provient du fait qu’une mauvaise cardinalité va influencer l’implémentation. Est-ce qu’une adresse doit d’abord être créée avant un utilisateur ou l’inverse<span class="frenchb-thinspace"> </span>? Après avoir relu ma documentation sur la conception d’une base de données, je me suis aperçu que je n’avais pas normalisé les relations [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">4</sup>](TFE35.html#fn4x9)<a id="x1-129001f4"></a>. En fait, le modèle objet s’accommode très bien de l’existence de deux classes mais pas le modèle relationnel. J’ai donc repensé la base de données et ajouté les champs de la table Adresses à la table Utilisateurs.

* * *

<div class="figure"><a id="x1-129002r1"></a>

![PIC](22_Volumes_USB_TFE_Screen_Shot_2016-04-03_at_02_03_44.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 9.4.1:</span> <span class="content">Erreur de conception</span></div>

</div>

* * *

Le logiciel utilisé JMerise [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">5</sup>](TFE36.html#fn5x9)<a id="x1-129003f5"></a> est très bien pour créer des diagrammes Merise mais donne des résultats erronés lorsqu’on utilise la traduction automatique vers le schéma relationnel. De fait, lors de la traduction du schéma entité-relation vers le schéma relationnel, il traduit les relations 1<span class="frenchb-nbsp"> </span>:1 par une intégrité référentielle sur les clés primaires des deux côtés de la relation, rendant le modèle logique inutilisable pour l’application. Comment mettre à jour un article s’il faut d’abord créé un rayon qui ne se met à jour que si un article est créé<span class="frenchb-thinspace"> </span>? J’ai donc dû réaliser ”à la main” la traduction du schéma entité-relation en suivant la méthode classique [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">6</sup>](TFE37.html#fn6x9)<a id="x1-129004f6"></a>.

# <span class="titlemark">Cinquième partie 
</span><a id="x1-1300009.4"></a>Réalisation des cas d’utilisation

## <span class="titlemark">Chapitre 10</span>
<a id="x1-13100010"></a>Conception et implémentation des UC

### <span class="titlemark">10.1</span> <a id="x1-13200010.1"></a>UC ”Créer son compte client” et ”Gérer son compte client”

#### <span class="titlemark">10.1.1</span> <a id="x1-13300010.1.1"></a>Diagramme des classes participantes (DCP)

##### <a id="x1-13400010.1.1"></a>Réflexions sur le UC ”Créer son compte client”

Un utilisateur a besoin de s’inscrire pour utiliser l’application. Il est obligé de fournir une adresse e-mail et un mot de passe (qu’il confirme) pour avoir accès à l’application ”Natural Corner”. Le dialogue correspondant sera un formulaire reprenant les champs utiles pour un compte utilisateur. Le contrôleur a la responsabilité de vérifier les données fournies, du point de vue de la syntaxe et du type, mais aussi du point de vue de la sécurité afin de se prémunir des failles de type injection de code javascript , entre autres. La méthode ”verifierInput()” aura cette responsabilité. Une méthode ”envoyerFormulaire()” se charge de récolter les informations et de les fournir au contrôle ”CtrlCompte”. Un diagramme de communication permet d’illustrer cette question.

* * *

<div class="figure"><a id="x1-134001r1"></a>

![PIC](23_Volumes_USB_TFE_com_Cre__er_son_compte.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.1:</span> <span class="content">Diagramme de communication ”Créer son compte client”</span></div>

</div>

* * *

##### <a id="x1-13500010.1.1"></a>Réflexions sur le UC ”Gérer son compte client”

L’utilisateur qui a un compte client peut à tout moment modifier ce compte. Pour ce faire, nous allons créer une vue MiseAJourUtilisateur qui sera un formulaire de mise à jour des informations. Il pourra compléter ses informations personnelles et aussi changer son mot de passe. La logique étant sensiblement la même que pour le UC ”Créer un compte client”, nous nous bornerons à changer la classe de dialogue Inscription en la classe MiseAJourUtilisateur. La méthode miseAJourUtilisateur() est ajoutée à la classe CtrlCompte.

##### <a id="x1-13600010.1.1"></a>Diagramme des classes participantes

Voici le diagramme des classes participantes réalisant le use case ”Créer son compte client” suivi de celui de ”Gérer son compte client”.

* * *

<div class="figure"><a id="x1-136001r2"></a>

![PIC](24_Volumes_USB_TFE_Cre__er_son_compte__DCP_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.2:</span> <span class="content">Créer son compte client</span></div>

</div>

* * *

* * *

<div class="figure"><a id="x1-136002r3"></a>

![PIC](25_Volumes_USB_TFE_Ge__rer_son_compte__DCP_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.3:</span> <span class="content">Gérer son compte client</span></div>

</div>

* * *

#### <span class="titlemark">10.1.2</span> <a id="x1-13700010.1.2"></a>Diagramme de navigation [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE38.html#fn1x10)<a id="x1-137001f1"></a>

Un utilisateur accède à l’application et a ensuite le choix entre se logguer avec ou sans Facebook ou créer un compte. Il ne peut pas entrer dans l’application sans s’être identifié. Il peut créer un compte s’il le désire. Il est envoyé vers la page de l’inscription. Il remplit les champs jusqu’à ce qu’il se conforme aux règles de validation. Il voit un message <span class="cmsy-5">≪</span> compte créé <span class="cmsy-5">≫</span> et est redirigé vers la page principale de l’application.

* * *

<div class="figure"><a id="x1-137002r4"></a>

![PIC](26_Volumes_USB_TFE_diagramme_nav_creer_gerer_compte.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.4:</span> <span class="content">Diagramme de navigation pour ”Créer son compte” et ”Gérer son compte”</span></div>

</div>

* * *

#### <span class="titlemark">10.1.3</span> <a id="x1-13800010.1.3"></a>Conception objet préliminaire

##### <a id="x1-13900010.1.3"></a>Diagrammes d’interaction pour le UC ”Créer son compte client”

* * *

<div class="figure"><a id="x1-139001r5"></a>

![PIC](27_Volumes_USB_TFE_sd_Cre__er_son_compte.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.5:</span> <span class="content">Diagramme d’interaction ”Créer son compte”</span></div>

</div>

* * *

La réflexion à partir du diagramme de séquence nous a amené à penser qu’un dialogue Message était nécessaire pour alerter l’utilisateur de la création de son compte. La méthode addUser(uti) introduit l’objet ’uti’ créé suite à un message d’un contrôleur CtrlCompte. Une instance d’adresse est immédiatement créée à la suite de la création d’une instance d’utilisateur du fait de leur relation de composition.

L’écriture d’un diagramme de séquence prenant en compte le cas où l’input ne correspond pas au critère ne semble pas pertinent car trop rudimentaire, en effet un message d’erreur sera propagé et l’utilisateur recommencera l’opération.

La méthode checkEmailAvailability(email) va consulter la base de donnée pour savoir si l’email est déjà pris.

##### <a id="x1-14000010.1.3"></a>Diagrammes d’interaction pour le UC ”Gérer son compte client”

* * *

<div class="figure"><a id="x1-140001r6"></a>

![PIC](28_Volumes_USB_TFE_sd_Ge__rer_son_compte.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.6:</span> <span class="content">Diagramme d’interaction ”Gérer son compte”</span></div>

</div>

* * *

L’utilisateur, en accédant à la page de mise à jour de ses informations, actionne la méthode ”getInfosCompte”. Le contrôleur va ensuite chercher dans la base de donnée les informations relative à l’utilisateur identifié. Une instance d’utilisateur est créée et contient les informations de l’utilisateur collectées dans la base de données. La méthode updateUser demande une adresse email pour identifier l’utilisateur et crée un nouvel utilisateur qu’il va mettre à jour avec ses nouveau champs l’ancien utilisateur. La responsabilité de la création d’une instance d’utilisateur est cette fois ci laissée à la classe Database.

##### <a id="x1-14100010.1.3"></a>Création du gestionnaire de la base de données

Nous pouvons désormais réaliser le CRUD (Create, Read, Update, Delete) pour les utilisateurs. Nous mettons de côté pour le moment le Delete car il n’est pas souhaitable de donner cette possibilité à un utilisateur. Plusieurs méthodes ont été créées. Un choix de conception a été effectué au niveau de l’utilisation de l’e-mail pour retrouver de manière unique un utilisateur. Il s’agit d’une clé primaire qui remplace la clé primaire de la base de données pour le modèle conceptuel (surrogate key). Il est nécessaire de vérifier le mot de passe et la disponibilité d’une adresse e-mail pour qu’un utilisateur s’identifie. Cette action n’a pas fait l’objet d’un UC à cause de sa simplicité.

* * *

<div class="figure"><a id="x1-141001r7"></a>

![PIC](29_Volumes_USB_TFE_database.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.7:</span> <span class="content">Gestionnaire de la base de données</span></div>

</div>

* * *

##### <a id="x1-14200010.1.3"></a>Diagramme de classes

* * *

<div class="figure"><a id="x1-142001r8"></a>

![PIC](30_Volumes_USB_TFE_Cre__er_son_compte__diag__de_classe_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.8:</span> <span class="content">Diagramme de classes</span></div>

</div>

* * *

#### <span class="titlemark">10.1.4</span> <a id="x1-14300010.1.4"></a>Implémentation

##### <a id="x1-14400010.1.4"></a>Tests unitaires

Pour ce premier UC, il s’agit d’un howto afin de permettre au lecteur de reproduire la démarche pour son propre projet. Il s’agit de travailler selon la méthode Test Driven Development, d’où l’écriture des tests unitaires avant le code proprement dit. Voir appendice A.

<span class="paragraphHead"><a id="x1-14500010.1.4"></a>Classe entités</span> En me demandant comment implémenter cette classe, je me rends compte qu’une relation de composition entre Adresse et Utilisateur ne convient pas. D’abord parce que le couplage est trop fort et empêche la réutissabilité (cette classe pourra être utilisée pour une autre classe ultérieurement), ensuite parce que le langage PHP ne permet pas de créer une classe interne de manière triviale. Ce surplus de travail n’étant pas nécessaire, je décide de corriger la classe Adresse.

Il reste encore les deux classes à tester<span class="frenchb-nbsp"> </span>: Gérant et Vendeur. Il s’agit de tester cette fois l’héritage. L’opération consiste à vérifier que les types sont identiques.

<div class="lstlisting" id="listing-1"><span class="label"><a id="x1-145001r1"></a><span class="cmr-9">1</span></span><span class="cmtt-9">public</span><span class="cmtt-9"> </span><span class="cmtt-9">function</span><span class="cmtt-9"> </span><span class="cmtt-9">testInheritance</span><span class="cmtt-9">(){</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-145002r2"></a><span class="cmr-9">2</span></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">$this</span><span class="cmtt-9">-></span><span class="cmtt-9">assertTrue</span><span class="cmtt-9">(</span><span class="cmtt-9">$this</span><span class="cmtt-9">-></span><span class="cmtt-9">vendeur</span><span class="cmtt-9"> </span><span class="cmtt-9">instanceof</span><span class="cmtt-9"> </span><span class="cmtt-9">Utilisateur</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-145003r3"></a><span class="cmr-9">3</span></span><span class="cmtt-9">}</span></div>

Il faut maintenant tester le gestionnaire de la base de données. Une classe de tests est créée et va travailler de la même manière pour les différentes méthodes du gestionnaire de la base de données.

##### <a id="x1-14600010.1.4"></a>Classe du contrôleur

Le première chose à faire est de créer une classe Trait [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">2</sup>](TFE39.html#fn2x10)<a id="x1-146001f2"></a> PHP nommé “CtrlCompte.class.php“ dans le dossier controlers. Ensuite, on peut créer une classe EnregistrementAction.inc.php dans laquelle les méthodes du modèle relatives à CtrlCompte seront utilisées. On clique droit sur cette dernière classe et on demande à Eclipse PHP de créer une classe de tests. Cette classe de test aura préparé les tests relatifs aux méthodes du Trait CtrlCompte.

* * *

<div class="figure"><a id="x1-146002r9"></a>

![PIC](31_Volumes_USB_TFE_Screen_Shot_2016-05-08_at_14_05_11.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.9:</span> <span class="content">Trait PHP implémentant le contrôleur CtrlCompte</span></div>

</div>

* * *

La difficulté ici revient à trouver le moyen de simuler les inputs de l’utilisateur matérialisés par la variable superglobale $_POST. Le choix s’est porté sur l’utilisation de la fonction filter_var_array() [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">3</sup>](TFE40.html#fn3x10)<a id="x1-146003f3"></a>. En suivant cette exemple trouvé sur stackoverflow [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">4</sup>](TFE41.html#fn4x10)<a id="x1-146004f4"></a>, j’ai réussi à mettre en place un batterie de tests pour la méthode validerInputs().

* * *

<div class="figure"><a id="x1-146005r10"></a>

![PIC](32_Volumes_USB_TFE_Screen_Shot_2016-05-08_at_14_08_42.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.10:</span> <span class="content">Répertoires des tests</span></div>

</div>

* * *

Les tests se borneront à reproduire les inputs sans rentrer dans les détails puisque les mutateurs de la classe Utilisateur ont déjà testé les différentes expressions régulières utilisées dans la méthode verifierInput(). Tout le code ne sera malheureusement pas couvert par les tests unitaires car une bonne partie du contrôleur relève de la gestion de la Vue et ne relève pas du domaine des tests unitaires.

* * *

<div class="figure"><a id="x1-146006r11"></a>

![PIC](33_Volumes_USB_TFE_Screen_Shot_2016-05-08_at_14_09_01.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.11:</span> <span class="content">Tests unitaires du contrôleur CtrlCompte</span></div>

</div>

* * *

A la ligne 22, on peut voir la technique employée pour imiter les inputs de l’utilisateur lors du test unitaire.

* * *

<div class="figure"><a id="x1-146007r12"></a>

![PIC](34_Volumes_USB_TFE_Screen_Shot_2016-05-08_at_14_09_20.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.12:</span> <span class="content">Tests unitaires du contrôleur CtrlCompte-méthode testVerifierInput()</span></div>

</div>

* * *

A la ligne 53, on initialise et remplit un tableau ayant le nom de la variable superglobale récupérant les requêtes POST du protocole HTML en PHP. Il suffit alors de tester la méthode verifierInput().

##### <a id="x1-14700010.1.4"></a>Code

La démarche préconisée dans le livre de référence [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">5</sup>](TFE42.html#fn5x10)<a id="x1-147001f5"></a> suggère de mettre en place une conception objet détaillée. Nous passerons plutôt directement à l’écriture du code en reliant au framework mis en place la conception objet préliminaire. Cette façon de procéder évite de rentrer dans des détails d’implémentation sur un schéma UML liés à un langage qui peut lui même varier en fonction d’un framework.

Le framework impose que les différentes classes d’implémentation dérivent des classes mères View et Action. Dès lors, le contrôleur se matérialise par les différentes classe *Action.inc.php. Cependant, l’héritage multiple n’étant pas possible en PHP, il est compliqué de créer une classe abstraite qui aurait les méthodes du contrôleur. L’idée pour implémenter le contrôleur ‘CtrlCompte‘ de l’analyse est de créer un trait PHP appelé “CtrlCompte“ qui comporte les méthodes implémentées et qui seront utilisées par les classes dérivant de la classe Action. Le framework peut ainsi rendre compte du modèle modèle-vue-contrôleur.

* * *

<div class="figure"><a id="x1-147002r13"></a>

![PIC](35_Volumes_USB_TFE_Screen_Shot_2016-05-08_at_14_16_53.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.13:</span> <span class="content">Hiérarchie des dossiers représentant une conception objet MVC en PHP</span></div>

</div>

* * *

Dans la classe du contrôleur EnregistrementAction.inc.php (Voir figure 9.1.20), les données envoyées par l’utilisateur pour s’enregistrer doivent être traitées afin d’assurer l’intégrité des données manipulées par le modèle et la base de données. Il convient de se protéger des certaines failles de sécurités. On utilise traditionnellement différentes techniques comme la fonction magic_quote ou html_special_char pour échapper le code. Cependant, PHP a prévu un moyen sécurisé et efficace pour manier les données de l’utilisateur<span class="frenchb-nbsp"> </span>: la méthode filter_input.

<div class="lstlisting" id="listing-2"><span class="label"><a id="x1-147003r1"></a><span class="cmr-9">1</span></span><span class="cmtt-9">$form_data</span><span class="cmtt-9"> </span><span class="cmtt-9">=</span><span class="cmtt-9"> </span><span class="cmtt-9">filter_input_array</span><span class="cmtt-9">(</span><span class="cmtt-9">INPUT_POST</span><span class="cmtt-9">,</span><span class="cmtt-9"> </span><span class="cmtt-9">$filters</span><span class="cmtt-9">)</span><span class="cmtt-9">;</span></div>

Il suffit de transmettre un tableau contenant l’ensemble des filtres sur les inputs de l’utilisateur à la méthode filter_input_array() et l’on obtient un procédé propre et net pour manier les données de l’utilisateur. Sur l’exemple choisi (ligne 14 à 16), on applique le filtre FILTER_SANITIZE_EMAIL et FILTER_SANITIZE_MAGIC_QUOTES pour l’e-mail indiqué par l’utilisateur. Le flag FILTER_NULL_ON_FAILURE permet d’éviter de répéter les méthodes isset() avec<span class="frenchb-thinspace"> </span>!empty() et de les remplacer par un simple test sur input<span class="frenchb-thinspace"> </span>!==NULL. Pour le mot de passe, une option a été ajoutée, l’expression régulière sur le mot de passe afin de contrôler qu’il y a bien au moins 6 caractères munis d’une majuscule et d’un nombre au minimum. Si un des filtres ne passe pas, la valeur NULL est retournée. Avec ces données, un nouvel utilisateur est instancié<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-147004r14"></a>

![PIC](36_Volumes_USB_TFE_Screen_Shot_2016-05-08_at_14_29_17.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.14:</span> <span class="content">Méthode ajouterUtilisateur()</span></div>

</div>

* * *

A noter l’utilisation, au lieu du traditionnel md5(), de la méthode password_hash() (ligne 67) qui, selon la documentation PHP, est plus appropriée pour le “hashage” d’un mot de passe [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">6</sup>](TFE43.html#fn6x10)<a id="x1-147005f6"></a>. Son utilisation est très simple et passe par un “salage” du mot de passe nommé “cost“ relatif à une constante PASSWORD_BCRYPT_DEFAULT_COST. Cette constante devra changer dans le temps par la communauté des développeurs de la bibliothèque PHP, ce qui permet ainsi au développeur d’une application de ne pas devoir trop se documenter sur les nouveautés en matières de “salage” de mot de passe [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">7</sup>](TFE44.html#fn7x10)<a id="x1-147006f7"></a>.

L’adresse IP est récupérée à l’aide de la variable superglobale $_SERVEUR[’REMOTE_ADDR’] (ligne 70). La méthode filter_var() filtre le résultat obtenu avec la constante FILTER_VALIDATE_IP.

La classe du modèle Database.inc.php<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-147007r15"></a>

![PIC](37_Volumes_USB_TFE_Screen_Shot_2016-05-08_at_14_32_01.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.15:</span> <span class="content">Méthode updateUser de la classe Database</span></div>

</div>

* * *

La documentation de style Javadoc permet de comprendre facilement le code (ligne 266 à 272) [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">8</sup>](TFE45.html#fn8x10)<a id="x1-147008f8"></a>. Envoie un booléen et une exception relative à l’e-mail en cas d’échecs. Le booléen est un choix de type ‘procédural’ qui garde des avantages. J’ai choisi de lancer une exception sur l’email, qui fait office de clé auxiliaire (surrogate), si celui-ci est déjà pris. La bibliothèque PDO de PHP, qui est par ailleurs orientée objet, s’occupe de l’accès à la base de données. Les requêtes préparées ont pour elles d’offrir une bonne défense à la faille injection SQL. Comme il n’y a pas de ORM utilisé, les requêtes SQL sont à chaque fois pensées et élaborées de la manière la plus judicieuse pour l’application. La requête va faire la mise à jour des données d’un utilisateur.

Le template userinfos.inc.php pour la class de la vue VoirCompteView.inc.php<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-147009r16"></a>

![PIC](38_Volumes_USB_TFE_Screen_Shot_2016-05-08_at_14_36_20.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.16:</span> <span class="content">Template userinfos.inc.php de la vue VoirCompteView</span></div>

</div>

* * *

Ce template est appelé par la classe VoirCompteView<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-147010r17"></a>

![PIC](39_Volumes_USB_TFE_Screen_Shot_2016-05-08_at_14_37_48.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.1.17:</span> <span class="content">Classe VoirCompteView.inc.php</span></div>

</div>

* * *

Cette manière de procéder permet de séparer le code PHP du code HTML au maximum. Seul des valeurs comme $this-<span class="cmmi-10">></span>user-<span class="cmmi-10">></span>getPrenom()<span class="frenchb-thinspace"> </span>; se retrouvent dans le code. A noter l’utilisation de Bootstrap dans les balises HTML<span class="frenchb-nbsp"> </span>: <span class="cmmi-10"><</span>table class=”tableresponsive col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-sm-offset-3”<span class="cmmi-10">></span>. signifie qu’il s’agit d’un tableau s’ajustant aux différentes tailles d’écran ou du navigateur selon une logique “grid”. Chaque “row” est découpée en 12 cases. Si l’écran est de taille moyenne “md” alors le tableau doit prendre 6 cases après avoir laissé un “offset” de trois cases à gauche class=” colmd6 colmdoffset3”. Trois cases à droites sont automatiques calculées puisque 12 - 6 - 3 = 3\. Cette manière simple de procéder permet de créer un site responsive qui s’adapte à toutes les tailles d’écran.

#### <span class="titlemark">10.1.5</span> <a id="x1-14800010.1.5"></a>Difficultés rencontrées, réflexions et conclusions provisoires

*   La difficulté principale tient à bien comprendre les liens entre le contrôleur, la vue et les templates. Une fois habitué, il devient plus aisée de penser de cette manière. Il est intéressant de constater que ce MVC s’adapte très bien à une analyse UML.
*   L’écriture de la classe Utilisateur.class.php m’a donné plusieurs choix d’implémentation. Vais-je laisser le contrôleur vérifier les données entrées par l’utilisateur ou vais-je les vérifier dans les mutateurs des attributs de la classe<span class="frenchb-thinspace"> </span>? L’idée serait de créer une méthode statique sanitazeData() comme préconisé dans le livre “PHP 5 Social Networking” [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">9</sup>](TFE46.html#fn9x10)<a id="x1-148001f9"></a>. Cette méthode serait sans doute une classe “statique” ou utilitaire dans le contrôleur et je l’utilise directement dans les classes du modèle. J’ai ainsi un contrôle des inputs à la source et me prémunie directement de la faille XSS ou de l’injection SQL. Finalement, en compulsant la documentation PHP et en m’inspirant du site du professeur B. Estellon [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">10</sup>](TFE47.html#fn10x10)<a id="x1-148002f10"></a>, j’ai préféré utilisé la méthode filter_input().
*   Il fallait configurer plusieurs modules pour faire fonctionner l’ensemble des logiciels. J’ai réussi à intégrer le module PTI [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">11</sup>](TFE48.html#fn11x10)<a id="x1-148003f11"></a> à Eclipse, j’étais en mesure d’effectuer des tests unitaires avec PHPUnit [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">12</sup>](TFE49.html#fn12x10)<a id="x1-148004f12"></a>. La documentation de PHP Unit est très bien fournie et je me suis formé à réaliser des tests de manière satisfaisante en la lisant. En réalité, la bibliothèque PHP Unit est très semblable dans sa philosophie à JUnit pour le langage Java et tout ce que j’ai appris sera sans nul doute profitable pour un autre langage de programmation.
*   J’ai appris qu’il n’y avait pas de surcharge de méthode (overload) en PHP 5, je dois trouver une solution alternative. Soit je crée “à la main” la surcharge grâce à une méthode trouvée ici [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">13</sup>](TFE50.html#fn13x10)<a id="x1-148005f13"></a>. Soit je me passe de la surcharge. Je dois donc utiliser un seul constructeur, ce qui est plutôt pénible pour la récupération d’un utilisateur dans la base de données. Le problème vient du fait que je dois connaître le fichier Utilisateur et savoir à l’avance le résultat de la requête, ce qui implique un fort couplage entre la base de données et la classe Utilisateur. Je voudrais éviter ce cas de figure. Première possibilité je crée un pattern DAO. Autre possibilité je mets en oeuvre “l’hydratation des objects” comme indiqué dans ici [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">14</sup>](TFE51.html#fn14x10)<a id="x1-148006f14"></a> . Je vais essayer la solution la plus directe en instanciant les objets avec le constructeur le plus évident (chaque attribut privé de la classe reçoit un paramètre lui donnant une nouvelle valeur).
*   Je n’arrivais pas à configurer le chemin d’accès dans la fonction require_once de manière à l’utiliser en chemin relatif au dossier du projet plutôt qu’en chemin absolu sur mon système de fichiers. Après quelques recherches, j’ai trouvé la variable “Magic Constant [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">15</sup>](TFE52.html#fn15x10)<a id="x1-148007f15"></a>“ __DIR__ qui fournit le chemin absolu du dossier dans lequel s’exécute le script.
*   En faisant les tests je découvre qu’un objet de type horodatage “DateTime” ne peut être converti en objet String et j’ajoute le new DateTime qui permet de créer un objet à la volée. Pour l’opération inverse de l’objet vers un un objet String j’ai trouvé sur StackOverFlow une réponse statisfaisante utilisant la méthode format() [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">16</sup>](TFE53.html#fn16x10)<a id="x1-148008f16"></a>.
*   J’apprends que le test addUser() renvoie faux et, en vérifiant la base de données, je me rends compte qu’il n’y a effectivement aucune insertion. La base de données est créé et la requête aurait dû fonctionner. En fait, je dois essayer de trouver le moyen de voir le résultat de l’exception envoyée par la méthode PDO qui s’occupe de l’insertion. Il faut en fait configurer PDO pour qu’il envoie les exceptions [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">17</sup>](TFE54.html#fn17x10)<a id="x1-148009f17"></a>. J’ai maintenant les messages d’erreur pour débuguer le code. J’apprends que j’ai le message SQLState[3D000] “invalid catalog name<span class="frenchb-nbsp"> </span>: 1046 No Database selected”. J’apprends qu’en faisait un copier-coller du code je n’ai pas replacé le nom de la base de données à laquelle je me connecte.
*   Erreur de conception de la méthode getUser()<span class="frenchb-nbsp"> </span>: je ne peux pas utiliser l’ID de l’utilisateur pour le retrouver dans la grille CRUD. L’id est intrinsèque à la conception de la base de données et l’auto incrémentation ne me permet pas de gérer cela. Je dois en fait envisager une clé secondaire avec laquelle je peux faire une recherche selon la logique métier ( qui ne doit en fait pas interférer avec la logique informatique).
*   La configuration du dossier comportant les fichiers .js et .css dans Google App Engine m’a pris beaucoup de temps. Je réfléchis à la manière dont je vais concevoir l’application. Je vais créer une formulaire qui permet de s’inscrire en tant que client à l’application.
*   J’ai installé le SDK Facebook pour répondre au besoin de “like” de la page Facebook demandé par le gérant de Natural Corner. L’installation est très facile et je peux déjà utiliser les fonctionnalités du SDK en une vingtaine de minutes.
*   En écrivant les setters et getters de la classe Utilisateur, je me suis rendu compte que je peux économiser et rendre plus pratique la méthode getDateInscription() en utilisant -<span class="cmmi-10">></span>format(’Y-m-d H<span class="frenchb-nbsp"> </span>:i<span class="frenchb-nbsp"> </span>:s’).
*   J’ai trouvé le moyen de sécuriser l’accès à la base de données. Il est évident que les mots de passe ne peuvent se trouver en dur dans le code, à plus forte raison si celui-ci apparaît sur Github en public. Il s’agit de remplir le fichier app.yaml comme indiqué ici [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">18</sup>](TFE55.html#fn18x10)<a id="x1-148010f18"></a>. Je crée des variables d’environnement pour le projet. Le fichier app.yaml ne sera plus “commited” et ”pushed” sur Github dorénavant.
*   LA SDK Facebook avec PHP demande une fonction de callback contenant l’adresse du site. Etant donné que je travaille en local, je vais déployer l’application sur Google App Engine et effectuer les tests directement dessus. Pour ne pas payer une instance de CloudSQL, je vais mettre en commentaire l’instanciation de la base de données. L’API Facebook ne voulait pas fonctionner tant que je n’avais pas ajouter un favicon...Le login avec Facebook fonctionne. L’api est encore buggué.
*   La fonction updateUser me pose problème. Je dois utiliser l’email pour mettre à jour en tant que clé secondaire mais si j’utilise un email déjà connu je ne peux pas mettre à jour. La solution est de voir si l’adresse email précédente est différente de celle de l’objet Utilisateur qui va modifier l’utilisateur dans la base de données. Si ce sont les mêmes adresses, cela signifie que l’utilisateur ne modifie pas son adresse e-mail et donc je ne contrôle pas si cette adresse est déjà prise et je n’envoie pas l’exception EmailAlreadyTaken. Si ces adresses sont différentes, c’est que l’utilisateur veut modifier son adresse e-mail, alors je dois vérifier si cette nouvelle adresse est disponible.
*   Petit problème de responsabilité de la méthode qui reçoit une exception. J’ai fait le choix d’initialiser les variables à l’aide des mutateurs dans le constructeur de la classe Utilisateur. Cependant, lorsqu’une exception est levée, ce constructeur se borne à l’attraper et à afficher le message d’erreur. Lors des tests, je n’arrive pas à retrouver ces messages dans la console et à débugguer correctement le code.
*   J’ai passé trois heures à chercher pourquoi le retour d’une fonction ne voulait pas retourner un objet d’ instance Utilisateur. En fait, j’utilisais “echo $user” qui utilise la méthode __toString(). Je n’avais pas testé en TDD cette fonction et j’en ai payé le prix.
*   La méthode employée pour réaliser ce UC va servir à l’ensemble des UC décrits pour la suite de ce travail. Cette méthode s’adapte très bien à une analyse de type ”Processus unifié” et permet de livrer rapidement une produit testable et utilisable par le gérant du magasin.

<span class="paragraphHead"><a id="x1-14900010.1.5"></a>Conclusion (provisoire)</span> Le résultat obtenu me semble très encourageant. En voulant connecter différents éléments disparates, j’ai créé un Framework PHP sur le Cloud parfaitement adapté comme backend à une application de type Angularjs ou Android. En effet, si je crée une API se basant sur l’architecture REST, il me sera possible de créer un lien avec n’importe quelle application cliente. La conception de l’application alliant l’analyse décrite par des diagrammes UML, le développement conduit par les tests, la flexibilité d’un PaaS et la réutilisabilité du patron de conception MVC est un argument de premier choix pour répondre au problème actuel du développement full-stack.

#### <span class="titlemark">10.1.6</span> <a id="x1-15000010.1.6"></a>Première livraison du logiciel et feedback du client.

Le 25 janvier 2016 à 15h30, dans les locaux du magasin ”Natural Corner”, j’ai pu montrer et utiliser cette version bêta de l’application. Le design paru convainquant et j’ai reçu certaines recommandations. Le gérant désirait<span class="frenchb-nbsp"> </span>:

<dl class="enumerate-enumitem">

<dt class="enumerate-enumitem">1\.</dt>

<dd class="enumerate-enumitem">Voir figurer l’adresse de l’enseigne sur la page d’accueil,</dd>

<dt class="enumerate-enumitem">2\.</dt>

<dd class="enumerate-enumitem">voir figurer l’horaire,</dd>

<dt class="enumerate-enumitem">3\.</dt>

<dd class="enumerate-enumitem">voir figurer un lien vers le site page Facebook avec les recettes bio,</dd>

<dt class="enumerate-enumitem">4\.</dt>

<dd class="enumerate-enumitem">incorporer un lien vers l’app pour commander les ingrédients en promo.</dd>

<dt class="enumerate-enumitem">5\.</dt>

<dd class="enumerate-enumitem">message en dessous du Natural Corner “bio, cosmetique, etc...”</dd>

<dt class="enumerate-enumitem">6\.</dt>

<dd class="enumerate-enumitem">produits en promo</dd>

</dl>

Ce point de vue a été consigné et sera pris en compte pour les incrémentations suivantes.

### <span class="titlemark">10.2</span> <a id="x1-15100010.2"></a>UC ”Recherche des produits”

#### <span class="titlemark">10.2.1</span> <a id="x1-15200010.2.1"></a>Diagramme des classes participantes (DCP)

##### <a id="x1-15300010.2.1"></a>Réflexions sur le UC ”Recherche des produits”

Une recherche d’un produit doit fournir rapidement les produits désirés. Les résultats doivent pouvoir être classés comme indiqués dans la spécification du projet. Pour correspondre aux attentes du client, les méthodes de présentation des résultats de la recherche ont été mis en place (classerParDenomination(), classerParPrixUnitaire(), classerCategorie(), pageSuivante(), pagePrecedente()). Les produits peuvent être mis dans le panier (mettreDansPanier()) et on peut accéder à une page de détails du produit. Deux contrôleurs entrent en jeu. Le contrôleur ”CtrlRecherche” va gérer la recherche, et le contrôleur ”CtrlArticle” va s’occuper de l’opération de sélection de l’article dans le panier. Pour clarifier la situation, on peut s’aider d’un diagramme de communication pour expliciter le cas simple d’une recherche rapide par mot-clé.

* * *

<div class="figure"><a id="x1-153001r1"></a>

![PIC](40_Volumes_USB_TFE_com_Recherche_rapide.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.1:</span> <span class="content">Diagramme de communication ”Recherche rapide”</span></div>

</div>

* * *

La vue demande la recherche de tous les articles correspondant au mot-clé. Le contrôleur interroge la base de données, qui lui renvoie une collection d’articles correspondant au mot-clé. Ensuite, le contrôleur peut envoyer la collection à la vue ResultatRecherche qu’il crée.

Si l’utilisateur demande les détails de l’article, il actionnera un autre processus, impliquant cette fois le contrôleur CtrlArticle. Une fois les détails sur l’article reçu, la vue FicheDetaillee est créée pour montrer à l’utilisateur les détails de l’articles.

* * *

<div class="figure"><a id="x1-153002r2"></a>

![PIC](41_Volumes_USB_TFE_com_Recherche_rapide_resultats.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.2:</span> <span class="content">Diagramme de communication ”Recherche Rapide”</span></div>

</div>

* * *

##### <a id="x1-15400010.2.1"></a>Diagramme des classes participantes

Un premier diagramme rend compte de la recherche, qu’elle soit simple ou détaillée. Ce DCP prend en compte les deux diagrammes précédents. Nous nous approchons de la logique du logiciel petit à petit en prennent en compte différents points de vue.

* * *

<div class="figure"><a id="x1-154001r3"></a>

![PIC](42_Volumes_USB_TFE_Chercher_des_articles__DCP_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.3:</span> <span class="content">Diagramme des classes participantes ”Recherche des produits”</span></div>

</div>

* * *

#### <span class="titlemark">10.2.2</span> <a id="x1-15500010.2.2"></a>Diagramme de navigation

On peut simplement représenter la navigation de ce UC. Le schéma est suffisamment explicite pour se passer de commentaire. A noter l’historique de la recherche lorsqu’une recherche a échoué et que l’utilisateur veut faire une autre recherche.

* * *

<div class="figure"><a id="x1-155001r4"></a>

![PIC](43_Volumes_USB_TFE_nav_recherche.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.4:</span> <span class="content">Diagramme de navigation ”Recherche”</span></div>

</div>

* * *

#### <span class="titlemark">10.2.3</span> <a id="x1-15600010.2.3"></a>Conception objet préliminaire

##### <a id="x1-15700010.2.3"></a>Diagrammes d’interactions pour le UC ”Recherche des produits”

Les diagrammes d’interaction vont permettre de compléter la vision de l’UC afin d’être exhaustif et de pouvoir passer à l’écriture complet du diagramme de classe. Le dialogue RechercheRapide aura la responsabilité de contrôler la syntaxe du mot-clé. Le gestionnaire de base de données, la classe Database, s’occupe d’aller chercher les articles désirés, étant donné qu’elle est ”Information Expert” dans ce cas [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">19</sup>](TFE56.html#fn19x10)<a id="x1-157001f19"></a>.

* * *

<div class="figure"><a id="x1-157002r5"></a>

![PIC](44_Volumes_USB_TFE_sd_Chercher_des__articles.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.5:</span> <span class="content">Diagramme de séquence ”Recherche rapide article”</span></div>

</div>

* * *

Les nouvelles méthodes liées à la vue vont permettre à l’utilisateur de changer de page lorsque la recherche est trop grande.

* * *

<div class="figure"><a id="x1-157003r6"></a>

![PIC](45_Volumes_USB_TFE_sd_Chercher_des__articles___d__taill__e_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.6:</span> <span class="content">Diagramme de séquence ”Recherche détaillée par prix”</span></div>

</div>

* * *

* * *

<div class="figure"><a id="x1-157004r7"></a>

![PIC](46_Volumes_USB_TFE_sd_Recherche_avance__e__infos_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.7:</span> <span class="content">Diagramme de séquence ”Recherche avancée”(infos)</span></div>

</div>

* * *

En fait, une recherche rapide est une recherche avancée sur la dénomination. Une recherche avancée est la même sauf qu’il y a plusieurs possibilités de recherche et que la navigation diffère. Nous nous bornerons à étudier la recherche par prix, les autres recherches étant similaires du point de vue de l’interaction des classes.

* * *

<div class="figure"><a id="x1-157005r8"></a>

![PIC](47_Volumes_USB_TFE_sd_Chercher_des__articles__erreurs_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.8:</span> <span class="content">Diagramme de séquence ”Recherche article”(erreurs)</span></div>

</div>

* * *

Ce dernier diagramme s’arrête sur les erreurs qui peuvent advenir pendant la recherche. Il aurait été possible de les faire figurer sur les autres diagrammes mais cela aurait été trop peu lisible.

##### <a id="x1-15800010.2.3"></a>Amélioration du gestionnaire de la base de données

On peut maintenant enrichir la classe Database avec les méthodes découvertes pendant la réfléxion sur l’UC ”Recherche article”.

* * *

<div class="figure"><a id="x1-158001r9"></a>

![PIC](48_Volumes_USB_TFE_Database2.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.9:</span> <span class="content">Gestionnaire de la base de données amélioré</span></div>

</div>

* * *

##### <a id="x1-15900010.2.3"></a>Diagramme de classes

Ce schéma est la vision orientée objet statique de l’UC ”Recherche article”. Il reprend l’ensemble des méthodes trouvées et permet de passer à l’écriture du code.

* * *

<div class="figure"><a id="x1-159001r10"></a>

![PIC](49_Volumes_USB_TFE_Chercher_des_articles.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.10:</span> <span class="content">Diagramme de classes ”Recherche article”</span></div>

</div>

* * *

#### <span class="titlemark">10.2.4</span> <a id="x1-16000010.2.4"></a>Implémentation

##### <a id="x1-16100010.2.4"></a>Tests unitaires

Les tests sont semblables dans la démarche à ceux mis en place pour les UC précédents. Exemple de tests de la classe du modèle Article<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-161001r11"></a>

![PIC](50_Volumes_USB_TFE_Screen_Shot_2016-05-08_at_21_22_40.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.11:</span> <span class="content">Test unitaire de la méthode getDenomination() et setDenomination()</span></div>

</div>

* * *

##### <a id="x1-16200010.2.4"></a>Code

<span class="paragraphHead"><a id="x1-16300010.2.4"></a>Contrôleur CtrlRecherche</span> Voici le choix d’implémentation du contrôleur CtrlRecherche. Il correspond à une vision en PHP des diagrammes d’interactions présentés.

* * *

<div class="figure"><a id="x1-163001r12"></a>

![PIC](51_Volumes_USB_TFE_Screen_Shot_2016-05-10_at_12_32_51.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.12:</span> <span class="content">Implémentation de la classe contrôleur CtrlRecherche</span></div>

</div>

* * *

Veuillez noter l’utilisation de la méthode setMessageView pour réaliser la vue MessageError et Message. Rien n’oblige le programmeur à suivre de manière littérale l’exigence de l’analyste pour autant que sa solution suit la vision du logiciel proposée.

#### <span class="titlemark">10.2.5</span> <a id="x1-16400010.2.5"></a>Difficultés rencontrées, réflexions et conclusions provisoires

*   Il existe des règles communément acceptées par la communauté des développeurs pour implémenter un diagramme de classe UML dans un langage orienté objet. La relation de composition entre la classe Article et la classe Rayon se traduit par l’intégration au sein du code de la classe Article d’une classe nichée Rayon [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">20</sup>](TFE57.html#fn20x10)<a id="x1-164001f20"></a>. Le langage PHP n’offre pas une telle possibilité d’implémentation mais rien n’empêche d’implémenter à la manière d’une relation d’agrégation ou de relation avec une navigabilité à sens unique ces deux classes. C’est ce dernier choix qui a été réalisé. A la ligne 31, on voit un attribut privé $_rayon. Le constructeur à la ligne 46 reçoit en dernier paramètre une instance de la classe Rayon. Il s’agit d’une manière d’implémenter la relation avec navigabilité unique entre deux classes.

* * *

<div class="figure"><a id="x1-164002r13"></a>![PIC](52_Volumes_USB_TFE_Screen_Shot_2016-05-10_at_12_27_14.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.13:</span> <span class="content">Classe Article</span></div>

</div>

* * *

*   Le template trouver.inc.php de la vue RechercheRapideView.inc.php fut sans doute le plus compliqué à réaliser. Cela tenait à la subtilité de l’insertion du langage PHP dans le langage HTML de la vue. Il fallait faire en sorte que les articles présentés soient sélectionnables pour remplir le panier (Voir UC Gérer Panier). La notation dans la balise input name=”articles[’.$article-<span class="cmmi-10">></span>getDenomination().’]” signifie qu’une collection nommé ”article” sera envoyée par une requête POST du protocole HTML au serveur. La dénomination de l’article servira d’identifiant pour le code côté serveur du panier.

* * *

<div class="figure"><a id="x1-164003r14"></a>![PIC](53_Volumes_USB_TFE_Screen_Shot_2016-05-10_at_12_52_55.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.2.14:</span> <span class="content">Template trouver.inc.php</span></div>

</div>

* * *

A la ligne 40, une boucle se charge d’itérer de 1 à 100 pour proposer de sélectionner jusqu’à 100 articles identiques.

*   Il est accepté dans le domaine de l’informatique de gestion que l’utilisation des types double ou float (en général tout calcul utilisant des virgules flottantes) doit être évitée pour des raisons de précisions et d’accumulation d’erreurs d’arrondis [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">21</sup>](TFE58.html#fn21x10)<a id="x1-164004f21"></a>. Java et C# utilisent respectivement la classe BigDecimal et le type decimal pour palier à ce problème. Après avoir vérifié sur le web les solutions proposées, j’ai décidé d’utiliser le type int et de travailler avec des centimes. Ensuite, lors de la présentation des données, la fonction number_format avec une précision de 2 est utilisée pour manier les valeurs monétaires (ligne 35). Le nombre est divisé par 100 avant d’être traité. La division est entière et la fonction se charge de présenter l’information comme s’il s’agissait d’un nombre à virgule. L’intégrité des données est ainsi garantie.

### <span class="titlemark">10.3</span> <a id="x1-16500010.3"></a>UC ”Gérer son panier”

#### <span class="titlemark">10.3.1</span> <a id="x1-16600010.3.1"></a>Diagramme des classes participantes (DCP)

##### <a id="x1-16700010.3.1"></a>Réflexions sur le UC

Il s’agit de permettre à l’utilisateur de sélectionner les articles et de les introduire dans son panier comme le ferait un client d’un supermarché. Comme mentionné dans la spécification détaillées des exigences, il faut aussi pouvoir ajouter d’autres articles et pouvoir en retirer avant de passer commande. Nous allons utiliser les entités Panier et LignePanier. Une instance d’une lignePanier contient une certaine quantité d’articles identiques. Nous allons donc créer une contrôleur nommé CtrlPanier qui contiendra les méthodes permettant d’ajouter, supprimer, modifier une ligne. On peut aussi vider le panier instantanément et le recalculer après une modification éventuelle. De plus, il sera possible d’imprimer un devis à l’écran. Le dialogue correspond au contrôleur. La classe GestionPanier contient un attribut ”quantité” qui aura une valeur correspondante à la taille de la liste contenant les lignes du panier.

##### <a id="x1-16800010.3.1"></a>Diagramme des classes participantes

* * *

<div class="figure"><a id="x1-168001r1"></a>

![PIC](54_Volumes_USB_TFE_Ge__rer_son_panier__DCP_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.3.1:</span> <span class="content">Diagramme des classes participantes ”Gérer son panier”</span></div>

</div>

* * *

#### <span class="titlemark">10.3.2</span> <a id="x1-16900010.3.2"></a>Diagramme de navigation

* * *

<div class="figure"><a id="x1-169001r2"></a>

![PIC](55_Volumes_USB_TFE_navGererPanier.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.3.2:</span> <span class="content">Diagramme de navigation ”Gérer son panier”</span></div>

</div>

* * *

#### <span class="titlemark">10.3.3</span> <a id="x1-17000010.3.3"></a>Conception objet préliminaire

##### <a id="x1-17100010.3.3"></a>Diagrammes d’interactions

* * *

<div class="figure"><a id="x1-171001r3"></a>

![PIC](56_Volumes_USB_TFE_sd_Ge__rer_son_panier.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.3.3:</span> <span class="content">Diagramme de séquence ”Gérer son panier”</span></div>

</div>

* * *

* * *

<div class="figure"><a id="x1-171002r4"></a>

![PIC](57_Volumes_USB_TFE_sd_Vider_son_panier.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.3.4:</span> <span class="content">Diagramme de séquence ”Vider son panier”</span></div>

</div>

* * *

#### <span class="titlemark">10.3.4</span> <a id="x1-17200010.3.4"></a>Conception objet détaillée

##### <a id="x1-17300010.3.4"></a>Diagramme de classes

* * *

<div class="figure"><a id="x1-173001r5"></a>

![PIC](58_Volumes_USB_TFE_Ge__rer_son_panier.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.3.5:</span> <span class="content">Diagramme de classe ”Gérer son panier”</span></div>

</div>

* * *

#### <span class="titlemark">10.3.5</span> <a id="x1-17400010.3.5"></a>Tests unitaires

* * *

<div class="figure"><a id="x1-174001r6"></a>

![PIC](59_Volumes_USB_TFE_Screen_Shot_2016-05-14_at_21_05_37.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.3.6:</span> <span class="content">Tests unitaires des méthodes AjouterLigne() et RetirerLigne()</span></div>

</div>

* * *

Ces tests unitaires correspondent à la classe entité Panier.

#### <span class="titlemark">10.3.6</span> <a id="x1-17500010.3.6"></a>Code

<span class="paragraphHead"><a id="x1-17600010.3.6"></a>Entité</span> La classe Panier ne présente pas de difficultés particulières. Elle s’implémente naturellement en comportant un attribut de classe nommé $_lignes qui est une collection d’objets lignePanier.

* * *

<div class="figure"><a id="x1-176001r7"></a>

![PIC](60_Volumes_USB_TFE_Screen_Shot_2016-05-14_at_21_11_27.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.3.7:</span> <span class="content">Méthode ajouterLigne de la classe LignePanier</span></div>

</div>

* * *

<span class="paragraphHead"><a id="x1-17700010.3.6"></a>Contrôleur</span> La méthode ajouterLigne() de la classe CtrlPanier<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-177001r8"></a>

![PIC](61_Volumes_USB_TFE_Screen_Shot_2016-05-15_at_18_12_48.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.3.8:</span> <span class="content">Méthode ajouterLigne() de la classe CtrlPanier</span></div>

</div>

* * *

Cette méthode du contrôleur va ajouter une ligne au panier directement à partir de la variable superglobale $_POST représentant les articles.

#### <span class="titlemark">10.3.7</span> <a id="x1-17800010.3.7"></a>Difficultés rencontrées, réflexions et conclusions provisoires

*   Le panier doit être enregistré à chaque fois dans la base de données au lieu de la variable $_POST. Pour procéder de la sorte, j’ai décidé de créer deux méthodes setPanierCourant() prenant en paramètres un panier et un identifiant de session et getPanierCourant() récupérant le panier.
*   Un choix d’implémentation a dû être opéré au niveau de l’utilisation du langage javascript pour réaliser le panier. Il aurait été beaucoup plus agréable pour l’utilisateur de posséder une panier se mettant à jour sans devoir rafraichir la page. Cependant, l’idée générale de l’application étant de créer un backend pour une application Android ou AngularJS, il n’a pas été jugé utile d’aller aussi loin pour l’application. On peut à tout moment demander quelle est la valeur d’un panier enregistré dans le back-end à l’aide de la méthode getJsonData()<span class="frenchb-nbsp"> </span>:

    * * *

    <div class="figure"><a id="x1-178001r9"></a>![PIC](62_Volumes_USB_TFE_Screen_Shot_2016-05-15_at_00_00_09.png)

    <div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.3.9:</span> <span class="content">Méthode GetJsonData() de la classe Panier</span></div>

    </div>

    * * *

    Cette méthode récursive va récupérer chaque champs des attributs de l’objet et retrouver la valeur qui lui est associée, tout cela dynamiquement de manière à effectuer une sérialisation sous format JSON de l’objet. Une fois sous cette forme, l’objet, tout en conservant son état, peut être envoyé à une application cliente. La méthode ”get_object_var()” cherche les propriétés de l’objet donnée, en l’occurence l’instanciation de la classe possédant la méthode elle-même. La boucle à la ligne 126 va, pour chaque valeur des propriétés, recommencer selon la méthode récursive la récupération des propriétés de chaque propriétés si ces propriétés sont un objet et sont contenu effectivement dans la classe.

### <span class="titlemark">10.4</span> <a id="x1-17900010.4"></a>UC ”Commander”

#### <span class="titlemark">10.4.1</span> <a id="x1-18000010.4.1"></a>Diagramme des classes participantes (DCP)

##### <a id="x1-18100010.4.1"></a>Réflexions sur le UC

L’utilisateur peut à tout moment effectuer une commande après avoir rempli son panier. Il aura un récapitulatif et ensuite pourra valider sa commande. Il n’aura plus qu’à aller rechercher ce panier chez Natural Corner.

##### <a id="x1-18200010.4.1"></a>Diagramme des classes participantes

* * *

<div class="figure"><a id="x1-182001r1"></a>

![PIC](63_Volumes_USB_TFE_Commander__DCP_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.4.1:</span> <span class="content">Diagramme de classes participante ”Commander”</span></div>

</div>

* * *

#### <span class="titlemark">10.4.2</span> <a id="x1-18300010.4.2"></a>Diagramme de navigation

* * *

<div class="figure"><a id="x1-183001r2"></a>

![PIC](64_Volumes_USB_TFE_navCommande.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.4.2:</span> <span class="content">Diagramme de navigation</span></div>

</div>

* * *

#### <span class="titlemark">10.4.3</span> <a id="x1-18400010.4.3"></a>Conception objet préliminaire

##### <a id="x1-18500010.4.3"></a>Diagramme d’états

* * *

<div class="figure"><a id="x1-185001r3"></a>

![PIC](65_Volumes_USB_TFE_commandeEtats.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.4.3:</span> <span class="content">Diagramme d’état de l’UC ”Commander”</span></div>

</div>

* * *

#### <span class="titlemark">10.4.4</span> <a id="x1-18600010.4.4"></a>Conception objet détaillée

* * *

<div class="figure"><a id="x1-186001r4"></a>

![PIC](66_Volumes_USB_TFE_Commander_diag_classes.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.4.4:</span> <span class="content">Diagramme de classes</span></div>

</div>

* * *

### <span class="titlemark">10.5</span> <a id="x1-18700010.5"></a>UC ”Maintenir catalogue”

#### <span class="titlemark">10.5.1</span> <a id="x1-18800010.5.1"></a>Diagramme des classes participantes (DCP)

##### <a id="x1-18900010.5.1"></a>Réflexions sur le UC

Le gérant doit avoir la possibilité de créer un article, de le modifier et de le supprimer. Il doit de plus être capable de dire s’il est en promo ou disponible. Il doit aussi pouvoir créer un rayon et une catégorie. Pour ce faire, nous allons créer une page qui fera office de control panel dans laquelle nous trouverons une navigation tabulaire permettant de modifier des articles, des rayons et des catégories.

##### <a id="x1-19000010.5.1"></a>Diagramme des classes participantes

* * *

<div class="figure"><a id="x1-190001r1"></a>

![PIC](67_Volumes_USB_TFE_Maintenir_catalogue__DCP_.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.5.1:</span> <span class="content">Diagramme des classes participantes “Maintenir catalogue“</span></div>

</div>

* * *

#### <span class="titlemark">10.5.2</span> <a id="x1-19100010.5.2"></a>Diagramme de navigation

* * *

<div class="figure"><a id="x1-191001r2"></a>

![PIC](68_Volumes_USB_TFE_navCatalogue.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.5.2:</span> <span class="content">Diagramme de navigation ”Maintenir catalogue”</span></div>

</div>

* * *

#### <span class="titlemark">10.5.3</span> <a id="x1-19200010.5.3"></a>Conception objet préliminaire

##### <a id="x1-19300010.5.3"></a>Diagrammes d’interactions

* * *

<div class="figure"><a id="x1-193001r3"></a>

![PIC](69_Volumes_USB_TFE_sd_Maintenir_Catalogue.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.5.3:</span> <span class="content">Diagramme d’interactions ”Maintenir catalogue”</span></div>

</div>

* * *

##### <a id="x1-19400010.5.3"></a>Amélioration du gestionnaire de la base de données

Le gestionnaire de la base de données est enrichi des méthodes correspondant au CRUD des articles

* * *

<div class="figure"><a id="x1-194001r4"></a>

![PIC](70_Volumes_USB_TFE_Database1234.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.5.4:</span> <span class="content">Gestionnaire de la base de données</span></div>

</div>

* * *

#### <span class="titlemark">10.5.4</span> <a id="x1-19500010.5.4"></a>Tests unitaires

On peut montrer par exemple les tests concernant le CRUD des articles.

* * *

<div class="figure"><a id="x1-195001r5"></a>

![PIC](71_Volumes_USB_TFE_Screen_Shot_2016-05-18_at_19_42_48.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.5.5:</span> <span class="content">Test unitaire de la méthode updateArticle</span></div>

</div>

* * *

On crée une valeur aléatoire(ligne 426) pour la concaténer aux chaines de caractères représentant l’article. A la ligne 439, on retrouve la méthode updateArticle.

#### <span class="titlemark">10.5.5</span> <a id="x1-19600010.5.5"></a>Code

<span class="paragraphHead"><a id="x1-19700010.5.5"></a>Le contrôleur CtrlCatalogue</span>

* * *

<div class="figure"><a id="x1-197001r6"></a>

![PIC](72_Volumes_USB_TFE_Screen_Shot_2016-05-18_at_19_47_06.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.5.6:</span> <span class="content">Contrôleur CtrlCatalogue</span></div>

</div>

* * *

A la ligne 36, l’opérateur ternaire est utilisé pour indiquer à la manière d’un booléan (un integer 0 ou 1 en réalité) si l’article est disponible ou non selon l’input du gérant.

<span class="paragraphHead"><a id="x1-19800010.5.5"></a>Méthode addArticle de la classe entité Database</span>

* * *

<div class="figure"><a id="x1-198001r7"></a>

![PIC](73_Volumes_USB_TFE_Screen_Shot_2016-05-18_at_19_50_17.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 10.5.7:</span> <span class="content">Méthode addArticle de la classe Database</span></div>

</div>

* * *

L’article est introduit de manière classique. Aux lignes 473, 494 et 496, les méthodes beginTransaction(), commit() et rollback() sont explicitement appelées pour assurer le caractère ACID de la base de données lorsqu’on veut récupérer l’id de la table Article dans la base de données. Après avoir été rendu persistant, l’objet article reçoit l’id qui sera utile pour l’application (notamment pour la catégorie de l’article). Un objet en PHP étant introduit par référence dans une méthode, l’objet garde le nouvel id après l’enregistrement dans la base de données.

## <span class="titlemark">Chapitre 11</span>
<a id="x1-19900011"></a>Création de l’API et utilisation de AngularJS

### <span class="titlemark">11.1</span> <a id="x1-20000011.1"></a>API REST

L’API REST utilisera le format JSON. On résume généralement dans un tableau les différents verbes du protocole HTTP en relation avec l’adresse URL associée. Voir par exemple le site du framework PHP PhalconPHP [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE59.html#fn1x11)<a id="x1-200001f1"></a>. Quatre verbes correspondent aux quatre méthodes HTTP<span class="frenchb-nbsp"> </span>:

*   GET pour chercher les données
*   POST pour ajouter des données
*   PUT pour modifier des données
*   DELETE pour supprimer les données

<div class="center">

<div class="tabular">

<colgroup id="TBL-8-1g"><col id="TBL-8-1"></colgroup><colgroup id="TBL-8-2g"><col id="TBL-8-2"></colgroup><colgroup id="TBL-8-3g"><col id="TBL-8-3"></colgroup>
| 

* * *

 | 

* * *

 | 

* * *

 |
| Méthode | URL | Action |
| 

* * *

 | 

* * *

 | 

* * *

 |
| 

* * *

 | 

* * *

 | 

* * *

 |
| GET | /api/articles | Récupère tous les articles |
| 

* * *

 | 

* * *

 | 

* * *

 |
| GET | /api/articles/search/pomme | Cherche les articles ayant ”pomme” dans leur nom |
| 

* * *

 | 

* * *

 | 

* * *

 |
| GET | /api/users/email@mail.com | Cherche un utlisateur dont l’email correspond |
| 

* * *

 | 

* * *

 | 

* * *

 |
| GET | /api/articles/3 | Récupère un article à partir de la clé primaire |
| 

* * *

 | 

* * *

 | 

* * *

 |
| POST | /api/users | Ajoute un nouvel utilisateur |
| 

* * *

 | 

* * *

 | 

* * *

 |
| PUT | /api/users/4 | Modifie un utilisateur à partir de la clé primaire |
| 

* * *

 | 

* * *

 | 

* * *

 |
| DELETE | /api/commandes/5 | Détruire une commande à partir de la clé primaire |
| 

* * *

 | 

* * *

 | 

* * *

 |

</div>

</div>

Chaque classe reçoit la méthode permettant de sérialiser l’état de l’objet instancié par l’application.

* * *

<div class="figure"><a id="x1-200002r1"></a>

![PIC](74_Volumes_USB_TFE_Screen_Shot_2016-05-16_at_16_07_06.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 11.1.1:</span> <span class="content">Récupération d’un objet JSON de type Utilisateur par l’API RESTful</span></div>

</div>

* * *

L’application Natural Corner est prête (sous réserve d’un développement ultérieur en accord avec le gérant du magasin) à accueillir une application cliente Android, iOS ou AngularJS.

### <span class="titlemark">11.2</span> <a id="x1-20100011.2"></a>AngularJS

A titre d’exemple pour montrer le potentiel du back-end créé, voici une solution cliente en AngularJS utilisant l’API REST.

* * *

<div class="figure"><a id="x1-201001r1"></a>

![PIC](75_Volumes_USB_TFE_Screen_Shot_2016-05-16_at_12_04_22.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 11.2.1:</span> <span class="content">Code AngularJS du template page.inc.php</span></div>

</div>

* * *

A la ligne 128, dans le contrôleur, il y a un appel GET à l’API (l’adresse n’a pas été écrite en utilisant le URL rewriting).

* * *

<div class="figure"><a id="x1-201002r2"></a>

![PIC](76_Volumes_USB_TFE_Screen_Shot_2016-05-16_at_12_09_46.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 11.2.2:</span> <span class="content">Mise en oeuvre de l’API REST avec AngularJS</span></div>

</div>

* * *

La ligne 5 contient l’attribut ng-repeat qui est une boucle dans le langage de balise Angularjs. La valeur ”x” est l’objet utilisateur et chaque champs de l’objet est représenté par ses noms. Par exemple, à la ligne 15, on voit <span class="cmsy-10">{{</span>x._pseudo<span class="cmsy-10">}}</span> qui est la valeur du champs nom.

Le lecteur est invité à consulter cette solution sur le Github associé au projet, sur le fork AngularJS<span class="frenchb-nbsp"> </span>: [<span class="cmtt-10">https://github.com/userdanydan/NaturalCorner/tree/AngularJSVersion</span>](https://github.com/userdanydan/NaturalCorner/tree/AngularJSVersion).

Enfin, le code qui permet de créer le flux JSON.

* * *

<div class="figure"><a id="x1-201003r3"></a>

![PIC](77_Volumes_USB_TFE_Screen_Shot_2016-05-18_at_20_10_21.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> 11.2.3:</span> <span class="content">classe UserJSON.inc.php</span></div>

</div>

* * *

Ce code va simplement aller chercher dans la base de données l’utilisateur entré en paramètre GET par la requête de l’application cliente. A la ligne 16, la méthode json_encode() renvoie au client l’enregistrement sous forme de format JSON.

## <span class="titlemark">Chapitre 12</span>
<a id="x1-20200012"></a>Conclusion

Le développement logiciel traverse une série de transformations depuis quelques années. D’abord l’avènement des technologiques mobiles avec les systèmes d’exploitation Android et iOS. Ensuite l’essor du Cloud computing, technologie initialement lancée par Amazon en 2006 [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE60.html#fn1x12)<a id="x1-202001f1"></a> pour la communauté des développeurs logiciels, permettant de se passer des infrastructures couteuse d’une société en informatique. Enfin, les technologies web se sont nettement améliorées et professionnalisées. Il a été possible grâce à ces avancées recentes de proposer une solution fiable au gérant du magasin Natural Corner. Il va de soi que le projet n’en est qu’à son ébauche et qu’il y a encore beaucoup à faire. L’application frontend basée sur une application Android vient d’être commencée et sera proposée à l’essai lors de la présentation orale de ce présent travail. Son efficacité démontrera par l’exemple la valeur de l’application Natural Corner.

La marché bio est un marché très porteur pour le moment et qui risque bien de prendre de plus grandes proportions dans les années à venir [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">2</sup>](TFE61.html#fn2x12)<a id="x1-202002f2"></a>. Il a été particulièrement excitant dans une perspective de carrière de m’intéresser à cette économie à la croisée de l’écologie et du commerce traditionnel, tout en étant résolumment ’trendy’. C’est que les nouvelles technologies s’allient parfaitement avec la logique bio. L’idée de travailler en circuit court ne peut trouver meilleur allié objectif que la commande en ligne des produits frais. Il s’en suit une gestion fine des commandes, une amélioration de la logistique des flux tendus et une réduction des invendus. Cette plongée au coeur du commerce bio de proximité fut une initiation dont je garderai, sans nulle doute, une expérience profitable.

Est-il possible de créer en quelque semaines une application ”full-stack”<span class="frenchb-thinspace"> </span>? A mon sens oui, mais cela demande une discipline à deux niveaux. La création de l’application Natural Corner m’a permis de comprendre que, d’abord, l’écriture des tests unitaires sont primordiaux et, ensuite, que l’analyse menant aux diagrammes UML doit être conduite avec rigueur et sérieux. Sans eux, écrire un logiciel revient à vouloir naviguer en pleine nuit sans instruments de géolocalisation et j’ai quelques fois dû revenir sur mes pas pour corriger des erreurs que l’analyse et les tests auraient pu détecter au préalable. Ces petites leçons ont en tout cas permis de me familiariser avec le métier d’analyste-développeur et j’espère que j’aurai la possibilité dans un futur proche d’approfondir ce métier.

Le micro framework doit encore être amélioré. Il le peut en intégrant les API Google App Engine qui regorgent de services très utiles [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">3</sup>](TFE62.html#fn3x12)<a id="x1-202003f3"></a> (base données no SQL, email, envois de sms, log par email gmail, cron, taskqueue pour la programmation concurrente, etc...). Une application Android se servant de l’API RESTful est en cours d’élaboration et permettra une expérience pour le client résolumment moderne.

Le gérant de Natural Corner effectue pour le moment des démarches pour créer un service de ventes en ligne d’un point de vue logistique. L’avenir nous dira si ce travail aura permis la réalisation du projet initial.

## <a id="x1-20300012"></a>Bibliographie

<a id="likesection.104"></a><a id="Q1-1-281"></a>

<div class="thebibliography">

<span class="biblabel">[1]<span class="bibsp">   </span></span><a id="XCharroux_UML2_modelisation"></a>Charroux B., Osmani A., Thierry-Mieg Y. , UML2 Pratique de la modélisation, Pearson Synthex 3ème édition, 2010

<span class="biblabel">[2]<span class="bibsp">   </span></span><a id="XGruau_conception_bdd"></a>Gruau C., Conception d’une base de données, Site developpez.com 1ère édition corrigée, 13/7/2006

<span class="biblabel">[3]<span class="bibsp">   </span></span><a id="XRoques_UML2"></a>Roques, P., UML2 Modéliser une application web, Eyrolles 4ème édition, 2008

<span class="biblabel">[4]<span class="bibsp">   </span></span><a id="XBrouard_SQL"></a>Brouard, F., Bruchez, R., Soutou, C., SQL, Pearson 3ème édition, 2010

<span class="biblabel">[5]<span class="bibsp">   </span></span><a id="Xkey-2"></a>[<span class="cmtt-10">http://pageperso.lif.univ-mrs.fr/</span><span class="cmtt-10">~</span><span class="cmtt-10">bertrand.estellon/</span>](http://pageperso.lif.univ-mrs.fr/~bertrand.estellon/), pdf du 1er avril 2014 consulté le 31/3/2016.

<span class="biblabel">[6]<span class="bibsp">   </span></span><a id="XPeacock_PHP"></a>Michael Peacock, PHP 5 Social Networking, Packt Publishing, 2010

<span class="biblabel">[7]<span class="bibsp">   </span></span><a id="Xkey-1"></a>[<span class="cmtt-10">https://secure.php.net/manual/fr/</span>](https://secure.php.net/manual/fr/)

<span class="biblabel">[8]<span class="bibsp">   </span></span><a id="Xkey-3"></a>[<span class="cmtt-10">http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-005-elements-of-software-construction-fall-2011/lecture-notes</span>](http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-005-elements-of-software-construction-fall-2011/lecture-notes)

<span class="biblabel">[9]<span class="bibsp">   </span></span><a id="XLarman_Patterns"></a>Larman, G., Applying UML and Patterns , An introduction to object-oriented analysis and design and unified process, Seconde edition, 2001

</div>

<a id="x1-203010r279"></a>

## <span class="titlemark">Annexe A</span>
<a id="x1-204000A"></a>Dump du code MySQL généré par JMerisse (et corrigé manuellement)

<div class="lstlisting" id="listing-3"><span class="label"><a id="x1-204001r1"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Script</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">MySQL</span><span class="cmitt-10x-x-90">.</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204002r2"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Table</span><span class="cmitt-10x-x-90">:</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">UTILISATEURS</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204003r3"></a></span><span class="cmtt-9">CREATE</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">UTILISATEURS</span><span class="cmtt-9">(</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204004r4"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">int</span><span class="cmtt-9"> </span><span class="cmtt-9">(11)</span><span class="cmtt-9"> </span><span class="cmtt-9">Auto_increment</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204005r5"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRENOM</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(128)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204006r6"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NOM</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(128)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204007r7"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PSEUDO</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(128)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204008r8"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PASS</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(1028)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204009r9"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADRESSE_MAIL</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(128)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204010r10"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">DATE_INSCRIPTION</span><span class="cmtt-9"> </span><span class="cmtt-9">Datetime</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204011r11"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">IP_CONNEXION</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(128)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204012r12"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">RUE</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(128)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204013r13"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NUMERO</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(25)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204014r14"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NUMERO_BOITE</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(25)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204015r15"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">CODE_POSTAL</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(25)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204016r16"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">LOCALITE</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(128)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204017r17"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PAYS</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(25)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204018r18"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIMARY</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204019r19"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">UNIQUE</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ADRESSE_MAIL</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9">ENGINE</span><span class="cmtt-9">=</span><span class="cmtt-9">InnoDB</span><span class="cmtt-9">;</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204020r20"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Table</span><span class="cmitt-10x-x-90">:</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">COMMANDES</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204021r21"></a></span><span class="cmtt-9">CREATE</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">COMMANDES</span><span class="cmtt-9">(</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204022r22"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_COMMANDE</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">int</span><span class="cmtt-9"> </span><span class="cmtt-9">(11)</span><span class="cmtt-9"> </span><span class="cmtt-9">Auto_increment</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204023r23"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">DATE_COMMANDE</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Datetime</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204024r24"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204025r25"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_PANIER</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204026r26"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIMARY</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_COMMANDE</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9">ENGINE</span><span class="cmtt-9">=</span><span class="cmtt-9">InnoDB</span><span class="cmtt-9">;</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204027r27"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Table</span><span class="cmitt-10x-x-90">:</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">ARTICLES</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204028r28"></a></span><span class="cmtt-9">CREATE</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">ARTICLES</span><span class="cmtt-9">(</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204029r29"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_ARTICLES</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">int</span><span class="cmtt-9"> </span><span class="cmtt-9">(11)</span><span class="cmtt-9"> </span><span class="cmtt-9">Auto_increment</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204030r30"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">DENOMINATION</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(128)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204031r31"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIX_UNITAIRE</span><span class="cmtt-9"> </span><span class="cmtt-9">DECIMAL</span><span class="cmtt-9"> </span><span class="cmtt-9">(15,3)</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204032r32"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">COMMENTAIRE</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Longtext</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204033r33"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">EN_VENTE</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Bool</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204034r34"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">EN_PROMO</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Bool</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204035r35"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_RAYONS</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204036r36"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIMARY</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_ARTICLES</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204037r37"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">UNIQUE</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">DENOMINATION</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9">ENGINE</span><span class="cmtt-9">=</span><span class="cmtt-9">InnoDB</span><span class="cmtt-9">;</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204038r38"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Table</span><span class="cmitt-10x-x-90">:</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">VENDEURS</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204039r39"></a></span><span class="cmtt-9">CREATE</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">VENDEURS</span><span class="cmtt-9">(</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204040r40"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_VENDEUR</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">int</span><span class="cmtt-9"> </span><span class="cmtt-9">(11)</span><span class="cmtt-9"> </span><span class="cmtt-9">Auto_increment</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204041r41"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204042r42"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIMARY</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_VENDEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9">ENGINE</span><span class="cmtt-9">=</span><span class="cmtt-9">InnoDB</span><span class="cmtt-9">;</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204043r43"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Table</span><span class="cmitt-10x-x-90">:</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">GERANTS</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204044r44"></a></span><span class="cmtt-9">CREATE</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">GERANTS</span><span class="cmtt-9">(</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204045r45"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_GERANT</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">int</span><span class="cmtt-9"> </span><span class="cmtt-9">(11)</span><span class="cmtt-9"> </span><span class="cmtt-9">Auto_increment</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204046r46"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_VENDEUR</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204047r47"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204048r48"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIMARY</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_GERANT</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9">ID_VENDEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9">ENGINE</span><span class="cmtt-9">=</span><span class="cmtt-9">InnoDB</span><span class="cmtt-9">;</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204049r49"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Table</span><span class="cmitt-10x-x-90">:</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">RAYONS</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204050r50"></a></span><span class="cmtt-9">CREATE</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">RAYONS</span><span class="cmtt-9">(</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204051r51"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_RAYONS</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">int</span><span class="cmtt-9"> </span><span class="cmtt-9">(11)</span><span class="cmtt-9"> </span><span class="cmtt-9">Auto_increment</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204052r52"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">DENOMINATION</span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(128)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204053r53"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIMARY</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_RAYONS</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9">ENGINE</span><span class="cmtt-9">=</span><span class="cmtt-9">InnoDB</span><span class="cmtt-9">;</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204054r54"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Table</span><span class="cmitt-10x-x-90">:</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">CATEGORIES</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204055r55"></a></span><span class="cmtt-9">CREATE</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">CATEGORIES</span><span class="cmtt-9">(</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204056r56"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_CATEGORIE</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">int</span><span class="cmtt-9"> </span><span class="cmtt-9">(11)</span><span class="cmtt-9"> </span><span class="cmtt-9">Auto_increment</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204057r57"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">DENOMINATION</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Varchar</span><span class="cmtt-9"> </span><span class="cmtt-9">(128)</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204058r58"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_CATEGORIE_1</span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204059r59"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIMARY</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_CATEGORIE</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9">ENGINE</span><span class="cmtt-9">=</span><span class="cmtt-9">InnoDB</span><span class="cmtt-9">;</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204060r60"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Table</span><span class="cmitt-10x-x-90">:</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">PANIERS</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204061r61"></a></span><span class="cmtt-9">CREATE</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">PANIERS</span><span class="cmtt-9">(</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204062r62"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_PANIER</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">int</span><span class="cmtt-9"> </span><span class="cmtt-9">(11)</span><span class="cmtt-9"> </span><span class="cmtt-9">Auto_increment</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204063r63"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_COMMANDE</span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204064r64"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIMARY</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_PANIER</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9">ENGINE</span><span class="cmtt-9">=</span><span class="cmtt-9">InnoDB</span><span class="cmtt-9">;</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204065r65"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Table</span><span class="cmitt-10x-x-90">:</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">LIGNES_PANIER</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204066r66"></a></span><span class="cmtt-9">CREATE</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">LIGNES_PANIER</span><span class="cmtt-9">(</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204067r67"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_LIGNE_PAGNIER</span><span class="cmtt-9"> </span><span class="cmtt-9">int</span><span class="cmtt-9"> </span><span class="cmtt-9">(11)</span><span class="cmtt-9"> </span><span class="cmtt-9">Auto_increment</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204068r68"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">QUANTITE</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204069r69"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_PANIER</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204070r70"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_ARTICLES</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204071r71"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIMARY</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_LIGNE_PAGNIER</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9">ENGINE</span><span class="cmtt-9">=</span><span class="cmtt-9">InnoDB</span><span class="cmtt-9">;</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204072r72"></a></span><span class="cmtt-9">#</span><span class="cmitt-10x-x-90">--</span><span class="cmitt-10x-x-90">----------------------------------------------------------</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">Table</span><span class="cmitt-10x-x-90">:</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">CARACTERISER</span><span class="cmitt-10x-x-90"> </span><span class="cmitt-10x-x-90">#------------------------------------------------------------</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204073r73"></a></span><span class="cmtt-9">CREATE</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">CARACTERISER</span><span class="cmtt-9">(</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204074r74"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_ARTICLES</span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204075r75"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ID_CATEGORIE</span><span class="cmtt-9"> </span><span class="cmtt-9">Int</span><span class="cmtt-9"> </span><span class="cmtt-9">NOT</span><span class="cmtt-9"> </span><span class="cmtt-9">NULL</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204076r76"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">PRIMARY</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_ARTICLES</span><span class="cmtt-9"> </span><span class="cmtt-9">,</span><span class="cmtt-9">ID_CATEGORIE</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9"> </span><span class="cmtt-9">)</span><span class="cmtt-9">ENGINE</span><span class="cmtt-9">=</span><span class="cmtt-9">InnoDB</span><span class="cmtt-9">;</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204077r77"></a></span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204078r78"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">COMMANDES</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204079r79"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_COMMANDES_ID_UTILISATEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204080r80"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">UTILISATEURS</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204081r81"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">COMMANDES</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204082r82"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_COMMANDES_ID_PANIER</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_PANIER</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204083r83"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">PANIERS</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_PANIER</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204084r84"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">ARTICLES</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204085r85"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_ARTICLES_ID_RAYONS</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_RAYONS</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204086r86"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">RAYONS</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_RAYONS</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204087r87"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">VENDEURS</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204088r88"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_VENDEURS_ID_UTILISATEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204089r89"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">UTILISATEURS</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204090r90"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">GERANTS</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204091r91"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_GERANTS_ID_VENDEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_VENDEUR</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204092r92"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">VENDEURS</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_VENDEUR</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204093r93"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">GERANTS</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204094r94"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_GERANTS_ID_UTILISATEUR</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204095r95"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">UTILISATEURS</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_UTILISATEUR</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204096r96"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">CATEGORIES</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204097r97"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_CATEGORIES_ID_CATEGORIE_1</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_CATEGORIE_1</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204098r98"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">CATEGORIES</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_CATEGORIE</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204099r99"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">PANIERS</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204100r100"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_PANIERS_ID_COMMANDE</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_COMMANDE</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204101r101"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">COMMANDES</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_COMMANDE</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204102r102"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">LIGNES_PANIER</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204103r103"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_LIGNES_PANIER_ID_PANIER</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_PANIER</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204104r104"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">PANIERS</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_PANIER</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204105r105"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">LIGNES_PANIER</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204106r106"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_LIGNES_PANIER_ID_ARTICLES</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_ARTICLES</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204107r107"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">ARTICLES</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_ARTICLES</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204108r108"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">CARACTERISER</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204109r109"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_CARACTERISER_ID_ARTICLES</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_ARTICLES</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204110r110"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">ARTICLES</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_ARTICLES</span><span class="cmtt-9">);</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204111r111"></a></span><span class="cmtt-9">ALTER</span><span class="cmtt-9"> </span><span class="cmtt-9">TABLE</span><span class="cmtt-9"> </span><span class="cmtt-9">CARACTERISER</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204112r112"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">ADD</span><span class="cmtt-9"> </span><span class="cmtt-9">CONSTRAINT</span><span class="cmtt-9"> </span><span class="cmtt-9">FK_CARACTERISER_ID_CATEGORIE</span><span class="cmtt-9"> </span><span class="cmtt-9">FOREIGN</span><span class="cmtt-9"> </span><span class="cmtt-9">KEY</span><span class="cmtt-9"> </span><span class="cmtt-9">(</span><span class="cmtt-9">ID_CATEGORIE</span><span class="cmtt-9">)</span><span class="cmtt-9"> </span>
<span class="label"><a id="x1-204113r113"></a></span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9"> </span><span class="cmtt-9">REFERENCES</span><span class="cmtt-9"> </span><span class="cmtt-9">CATEGORIES</span><span class="cmtt-9">(</span><span class="cmtt-9">ID_CATEGORIE</span><span class="cmtt-9">);</span></div>

<a id="x1-204114r279"></a>

## <span class="titlemark">Annexe B</span>
<a id="x1-205000B"></a>Conventions pour les diagrammes de navigation

##### <a id="x1-206000B"></a>Conventions

* * *

<div class="figure"><a id="x1-206001r1"></a>

![PIC](78_Volumes_USB_TFE_nav_conventions.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> B.0.1:</span> <span class="content">Conventions</span></div>

</div>

* * *

<a id="x1-206002r279"></a>

## <span class="titlemark">Annexe C</span>
<a id="x1-207000C"></a>Créer les tests avec PHPUnit

PhpUnit demande de créer au préalable une classe Adresse dans le modèle.

* * *

<div class="figure"><a id="x1-207001r1"></a>

![PIC](79_Volumes_USB_TFE_Screen_Shot_2016-04-01_at_15_42_22.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> C.0.1:</span> <span class="content">Hiérarchie des fichiers du projet</span></div>

</div>

* * *

Ensuite, on clique droit sur le fichier de la classe Adresse.class.php et on demande à Eclipse de créer automatiquement une classe de test.

* * *

<div class="figure"><a id="x1-207002r2"></a>

![PIC](80_Volumes_USB_TFE_Screen_Shot_2016-04-01_at_15_47_24.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> C.0.2:</span> <span class="content">Création d’une classe de tests</span></div>

</div>

* * *

* * *

<div class="figure"><a id="x1-207003r3"></a>

![PIC](81_Volumes_USB_TFE_Screen_Shot_2016-04-01_at_15_46_03.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> C.0.3:</span> <span class="content">Remplissage automatique des champs pour le test</span></div>

</div>

* * *

* * *

<div class="figure"><a id="x1-207004r4"></a>

![PIC](82_Volumes_USB_TFE_Screen_Shot_2016-04-01_at_16_15_51.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> C.0.4:</span> <span class="content">Création d’une page de tests</span></div>

</div>

* * *

On peut commencer à écrire les tests. Pour rappel il s’agit de la méthode Test Drive Development [<span class="footnote-mark"></span>](#Hfootnote.\theHHfootnote)[<sup class="textsuperscript">1</sup>](TFE63.html#fn1x15)<a id="x1-207005f1"></a> (TDD), qui préconise d’écrire les tests comme si les méthodes avaient déjà été implémentées. Une fois les tests écrits pour les mutateurs et les accesseurs de la classe Adresse, on peut lancer le premier test.

* * *

<div class="figure"><a id="x1-207006r5"></a>

![PIC](83_Volumes_USB_TFE_Screen_Shot_2016-04-01_at_16_17_57.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> C.0.5:</span> <span class="content">échec du test</span></div>

</div>

* * *

La méthode getId() de la classe Adresse n’ayant pas été implémentée, le test échoue. Nous commençons donc à écrire la classe munie des champs que l’on retrouve sur le diagramme de classes détaillé ainsi que son constructeur. Dans un premier temps, le constructeur est écrit sans aucune mesure de sécurité quant aux données introduites en paramètre, cette responsabilité sera donnée aux setters, qui ne sont pas encore écrits.

* * *

<div class="figure"><a id="x1-207007r6"></a>

![PIC](84_Volumes_USB_TFE_Screen_Shot_2016-04-01_at_16_29_43.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> C.0.6:</span> <span class="content">écriture de la classe Adresse</span></div>

</div>

* * *

Dans une démarche de test, l’attribut id est initialisé à 0 par le constructeur afin de faciliter la démarche, on pourra ultérieurement, en concordance avec l’implémentation de la base de données, réaliser ce travail.

Il est intéressant de créer une exception pour une classe du modèle à ce niveau de la réalisation du UC. Cela clarifie le déboguage et permet d’identifier plus rapidement les sources du problème. La philosophie des tests unitaires préconise de créer une page de test par classe. Cependant cette classe ne contenant que trois lignes de code, nous passerons outre le précepte.

* * *

<div class="figure"><a id="x1-207008r7"></a>

![PIC](85_Volumes_USB_TFE_Screen_Shot_2016-04-01_at_18_19_59.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> C.0.7:</span> <span class="content">classe AdresseException</span></div>

</div>

* * *

L’écriture du test des méthodes getId() et setId() donne immédiatement lieu à un test, permettant de progresser tranquillement jusqu’à l’écriture complète de la classe Adresse.

* * *

<div class="figure"><a id="x1-207009r8"></a>

![PIC](86_Volumes_USB_TFE_Screen_Shot_2016-04-01_at_16_55_19.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> C.0.8:</span> <span class="content">implémentation des méthodes de la classe Adresse</span></div>

</div>

* * *

* * *

<div class="figure"><a id="x1-207010r9"></a>

![PIC](87_Volumes_USB_TFE_Screen_Shot_2016-04-01_at_16_57_13.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> C.0.9:</span> <span class="content">tests des méthodes</span></div>

</div>

* * *

* * *

<div class="figure"><a id="x1-207011r10"></a>

![PIC](88_Volumes_USB_TFE_Screen_Shot_2016-04-01_at_18_37_48.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> C.0.10:</span> <span class="content">tests réussis</span></div>

</div>

* * *

On réitère le procédé avec la classe Utilisateur.<a id="x1-207012r279"></a>

## <span class="titlemark">Annexe D</span>
<a id="x1-208000D"></a>Déployer une application en PHP sur Google App Engine

Depuis la console Google App Engine, on choisit ”Créer un projet”<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-208001r1"></a>

![PIC](89_Volumes_USB_TFE_Screen_Shot_2016-05-19_at_09_56_06.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> D.0.1:</span> <span class="content">Console Google App Engine</span></div>

</div>

* * *

On renseigne le nom du projet.

* * *

<div class="figure"><a id="x1-208002r2"></a>

![PIC](90_Volumes_USB_TFE_Screen_Shot_2016-05-19_at_09_57_54.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> D.0.2:</span> <span class="content">Création du projet</span></div>

</div>

* * *

Ensuite, sur l’application GoogleAppEngineLauncher, on crée une nouvelle application<span class="frenchb-nbsp"> </span>:

* * *

<div class="figure"><a id="x1-208003r3"></a>

![PIC](91_Volumes_USB_TFE_Screen_Shot_2016-05-19_at_09_59_44.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> D.0.3:</span> <span class="content">GoogleAppEngineLauncher</span></div>

</div>

* * *

Les boutons ”Run” et ”Deploy” permettent respectivement de lancer l’application en local (exactement comme le ferait un serveur Apache) et de déployer sur le web l’application. Elle reçoit dès lors l’adresse https<span class="frenchb-nbsp"> </span>://naturalcorner-1.appspot.com.

* * *

<div class="figure"><a id="x1-208004r4"></a>

![PIC](92_Volumes_USB_TFE_Screen_Shot_2016-05-19_at_10_04_26.png)

<div class="caption"><span class="id"><span class="cmcsc-10">F<span class="small-caps">i</span><span class="small-caps">g</span><span class="small-caps">u</span><span class="small-caps">r</span><span class="small-caps">e</span></span> D.0.4:</span> <span class="content">Choix du runtime PHP</span></div>

</div>

* * *
