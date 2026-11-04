# Relations et cardinalités

## 1. Tableau des relations

| Entité A | Cardinalité A | Verbe métier | Cardinalité B | Entité B | Règle de gestion |
|---|---|---|---|---|---|
| VILLE | (1,N) | habite | (1,1) | AUTEUR | Une ville accueille un ou plusieurs auteurs. Un auteur habite dans une seule ville. |
| AUTEUR | (1,N) | rédige | (1,1) | ARTICLE | Un auteur rédige un ou plusieurs articles. Un article est rédigé par un seul auteur. |
| CATEGORIE | (0,N) | regroupe | (1,1) | ARTICLE | Une catégorie peut regrouper zéro ou plusieurs articles. Un article appartient à une seule catégorie. |
| ARTICLE | (0,N) | possède | (0,N) | TAG | Un article peut posséder zéro ou plusieurs tags. Un tag peut être associé à zéro ou plusieurs articles. |