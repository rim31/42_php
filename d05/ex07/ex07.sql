SELECT titre, resum FROM `film` WHERE `resum` like '%42%' OR `titre` like '%42%' ORDER BY duree_min;
