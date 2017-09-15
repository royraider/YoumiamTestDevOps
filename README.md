## Introduction
Ceci est un test ayant pour but de valider les competences à repondre à un besoin operationel.

Nous serons avant tout attentif aux performances, à la scalabilité et à la propreté du code proposé.

Good luck and Have fun ! :)

`PS: Si une question n'est pas faite, pensez à laisser une petit commentaire pour donner votre idée. `

## Mise en situation
Un fichier de log repertoriant des évenèments datés de différents services est géneré en continu par notre serveur. (log.txt)
Nous avons besoin d'un moyen d'obtenir rapidement des informations sur ce fichier.
## Access direct
0. Génerer un fichier log.txt à jour grace a la commande `php gen.php` (date, service, type, niveau, message)
1. Permettre d'obtenir via le shell un rapport (nombre) d'évenements survenu:
   1. Dans l'heure précédente
   2. Dans la journée précédente
2. Permettre d'obtenir via le shell un rapport (nombre) d'évenements survenu:
   1. En sélectionnant un ou plusieurs services de son choix
   2. En sélectionnant un type d'evenement
   3. En définissant un niveau minimum (1 a 10)
3. Permettre d'obtenir via le shell un rapport (liste) d'évenements survenus plus d'x fois (meme evenement Service-Type-Message, en ignorant le niveau d'event)
## Automatisation
1. expliquer et fournir une solution pour pour obtenir un rapport ecrit dans un fichier toutes les heures contenant pour chaque service le nombre d'erreur par type arriver dans l'heure ayant un niveau superieur à 3
2. expliquer et fournir une solution pour obtenir des alertes dans un fichier toutes les heures listant tout les evenements de l'heure precedante ayant eut lieux plus de 3fois (meme evenement Service-Type-Message, en ignorant le niveau d'event)
## Bonus
Proposer une solution coder pour envoyer les rapports automatisés sur une messagerie Slack ou via Email.
