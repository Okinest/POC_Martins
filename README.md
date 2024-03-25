# POC Mentalworks Stage / alternance

> [!NOTE]
> Vous serez jugé sur les points suivants :
> - La qualité de votre travail et respects des bonnes pratiques
> - Documentation de votre code et compréhension du sujet
> - Avancement du projet

## Contexte

Le client souhaite mettre en place une landing page permettant à ces visiteurs de s'inscrire à des newsletters. Ces données seront stockées directement sur son CRM.

L'intégration du formulaire d'inscription a déjà été réalisé. Vous devez réaliser la partie développement.

## A réaliser (en PHP)

### Etape 1 : Formulaire

Réaliser l'envoi du formulaire PHP. Vous devrez faire attention aux champs requis et aux validations.

Si le formulaire est valide, vous devrez soumettre les données sur le CRM du client.

La page a appeler est : http://51.91.108.32/registrations (en utilisant la méthode `POST`).

### Etape 2 : Affichage des inscriptions à chaque newsletter

Le client souhaite réaliser une page "dashboard" listant ses newsletters (non envoyées : statut "pending").

La liste des newsletters est disponible sur l'url suivante (en `GET`) : http://51.91.108.32/newsletters

Vous devez afficher les newsletters et afficher les utilisateurs inscrits pour chacune d'entre-elles (sous forme de tableau).


### Etape 3 : Envoyer les newsletters

Cette fonctionnalité consiste à réaliser l'envoi d'une newsletter. Pour cela, il faut :

- Créer un formulaire permettant de sélectionner une newsletter à envoyer.
- Lors de la soumission, récupérer les utilisateurs inscrits
- Envoyer un email avec le champ `title` de la newsletter en objet et en contenu le champ "content" à chaque utilisateur inscrit
- Mettre à jour le statut de la newsletter en `sent`

Méthode PUT sur l'url http://51.91.108.32/newsletters/:id (ou `:id` est l'identifiant)

Vous pouvez utiliser Mailcatcher en local pour simuler les emails : https://mailcatcher.me/.


### Etape 4. Désinscription

Lors de l'envoi des emails, il faut ajouter un lien en bas permettant de se déscrinscrire d'une newsletter.

Lors du clic sur le lien, il faut changer les informations de la personne inscrite : le champ `register` passe à `false`.

Méthode PUT sur l'url http://51.91.108.32/registrations/:id (ou `:id` est l'identifiant)


## Documentations techniques

- cURL : https://www.php.net/manual/fr/book.curl.php
- mail : https://www.php.net/manual/fr/function.mail.php
- Documentation appels API : https://www.npmjs.com/package/json-server


# Rendu

Faire un fork du projet et envoyer le dépôt à j.martins@mentalworks.fr
