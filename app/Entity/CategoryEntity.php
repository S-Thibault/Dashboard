<?php

    namespace App\Entity;

    use Core\Entity\Entity;

    class CategoryEntity extends Entity
    {

        /**
         * Retourner le lien de l'article
         * @return string
         */
        public function getUrl()
        {
            return 'index.php?p=posts.category&id=' . $this->id;
        }

        /**
         * Retourne le nom d'une catégorie
         * @return string
         */
        public function getCatTitre()
        {
          return $this->titre;
        }
    }
