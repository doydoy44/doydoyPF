<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocorico\CoreBundle\DataFixtures\ORM;

use Cocorico\CoreBundle\Entity\ListingCharacteristicType;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadListingCharacteristicTypeData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $listingCharacteristicType = new ListingCharacteristicType();
        $listingCharacteristicType->setName("Yes/No");
        $manager->persist($listingCharacteristicType);
        $manager->flush();
        $this->addReference('characteristic_type_yes_no', $listingCharacteristicType);

        $listingCharacteristicType = new ListingCharacteristicType();
        $listingCharacteristicType->setName("Quantity");
        $manager->persist($listingCharacteristicType);
        $manager->flush();
        $this->addReference('characteristic_type_quantity', $listingCharacteristicType);

        $listingCharacteristicType = new ListingCharacteristicType();
        $listingCharacteristicType->setName("Custom_1");
        $manager->persist($listingCharacteristicType);
        $manager->flush();
        $this->addReference('characteristic_type_custom_1', $listingCharacteristicType);


        //Pour INDOOR/OUTDOOR : Valeur personnalisée 1 => INDOOR et Valeur personnalisée 2 => OUTDOOR
        $listingCharacteristicType = new ListingCharacteristicType();
        $listingCharacteristicType->setName("indoor_outdoor");
        $manager->persist($listingCharacteristicType);
        $manager->flush();
        $this->addReference('characteristic_type_indoor_outdoor', $listingCharacteristicType);
        //Pour NIVEAU SPORTIF : Valeur personnalisée 1 => AMATEUR ; Valeur personnalisée 2 => CONFIRME ; Valeur personnalisée 3 => PROFESSIONNEL
        $listingCharacteristicType = new ListingCharacteristicType();
        $listingCharacteristicType->setName("sport_level");
        $manager->persist($listingCharacteristicType);
        $manager->flush();
        $this->addReference('characteristic_type_sport_level', $listingCharacteristicType);
        //Pour le NOMBRE DE PERSONNES : il faudrait voir un système pour mettre 1 à 5 ; +5; +10
        $listingCharacteristicType = new ListingCharacteristicType();
        $listingCharacteristicType->setName("nb_person");
        $manager->persist($listingCharacteristicType);
        $manager->flush();
        $this->addReference('characteristic_type_nb_person', $listingCharacteristicType);

    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 4;
    }

}
