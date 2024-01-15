# Symfony/HttpFoundation - Guide d'Installation et d'Utilisation

## Table des Matières

1. Installation
   - Composer
2. Utilisation
   - Request
   - Response

## 1. Installation

### 1 Composer

Assurez-vous d'avoir [Composer](https://getcomposer.org/) installé. Ensuite, exécutez la commande suivante dans le répertoire de votre projet pour installer `symfony/http-foundation` :

```bash
composer require symfony/http-foundation.

## 2. Utilisation

Le composant `symfony/http-foundation` offre deux classes principales, `Request` et `Response`, qui facilitent la manipulation des données de requête et la génération de réponses HTTP.

### 2.1 Request

La classe `Request` encapsule les informations relatives à une requête HTTP. Elle peut être utilisée pour accéder à des paramètres GET, POST, des en-têtes, des cookies, etc. par le biais de méthodes orientées objet.

```php
// Exemple d'utilisation de la classe Request
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

// Accéder aux paramètres GET
$parametreGet = $request->query->get('nom_du_parametre_get');

// Accéder aux paramètres POST
$parametrePost = $request->request->get('nom_du_parametre_post');

// Accéder aux en-têtes
$enTete = $request->headers->get('nom_de_l_entete');

// Plus d'utilisations possibles...

### 2.2 Response

La classe `Response` permet de générer des réponses HTTP avec différents statuts, en-têtes et contenus. Elle est utilisée pour renvoyer des réponses aux clients.

```php
// Exemple d'utilisation de la classe Response
use Symfony\Component\HttpFoundation\Response;

// Créer une réponse avec un contenu
$response = new Response('Contenu de la réponse', Response::HTTP_OK);

// Ajouter des en-têtes
$response->headers->set('Nom_de_l_entete', 'Valeur_de_l_entete');

// Plus d'utilisations possibles...