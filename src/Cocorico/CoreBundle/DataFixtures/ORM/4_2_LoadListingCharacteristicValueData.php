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
use Cocorico\CoreBundle\Entity\ListingCharacteristicValue;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadListingCharacteristicValueData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('Yes');
        $listingCharacteristicValue->translate('fr')->setName('Oui');
        $listingCharacteristicValue->setPosition(1);
        /** @var ListingCharacteristicType $listingCharacteristicType */
        $listingCharacteristicType = $manager->merge($this->getReference('characteristic_type_yes_no'));
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('characteristic_value_yes', $listingCharacteristicValue);

        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('No');
        $listingCharacteristicValue->translate('fr')->setName('Non');
        $listingCharacteristicValue->setPosition(2);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('characteristic_value_no', $listingCharacteristicValue);

        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('1');
        $listingCharacteristicValue->translate('fr')->setName('1');
        $listingCharacteristicValue->setPosition(1);
        $listingCharacteristicType = $manager->merge($this->getReference('characteristic_type_quantity'));
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('characteristic_value_1', $listingCharacteristicValue);

        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('2');
        $listingCharacteristicValue->translate('fr')->setName('2');
        $listingCharacteristicValue->setPosition(2);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('characteristic_value_2', $listingCharacteristicValue);

        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('3');
        $listingCharacteristicValue->translate('fr')->setName('3');
        $listingCharacteristicValue->setPosition(2);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('characteristic_value_3', $listingCharacteristicValue);

        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('Custom value 1');
        $listingCharacteristicValue->translate('fr')->setName('Valeur personnalisée 1');
        $listingCharacteristicValue->setPosition(1);
        $listingCharacteristicType = $manager->merge($this->getReference('characteristic_type_custom_1'));
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('characteristic_value_custom_1', $listingCharacteristicValue);

        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->setName("Custom value 2");
        $listingCharacteristicValue->translate('en')->setName('Custom value 2');
        $listingCharacteristicValue->translate('fr')->setName('Valeur personnalisée 2');
        $listingCharacteristicValue->setPosition(2);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('characteristic_value_custom_2', $listingCharacteristicValue);

        //Pour INDOOR/OUTDOOR : Valeur personnalisée 1 => INDOOR et Valeur personnalisée 2 => OUTDOOR
        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('INDOOR');
        $listingCharacteristicValue->translate('fr')->setName('INDOOR');
        $listingCharacteristicValue->setPosition(1);
        /** @var ListingCharacteristicType $listingCharacteristicType */
        $listingCharacteristicType = $manager->merge($this->getReference('characteristic_type_indoor_outdoor'));
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('indoor_outdoor_indoor', $listingCharacteristicValue);

        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('OUTDOOR');
        $listingCharacteristicValue->translate('fr')->setName('OUTDOOR');
        $listingCharacteristicValue->setPosition(2);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('indoor_outdoor_outdoor', $listingCharacteristicValue);

        //Pour NIVEAU SPORTIF : Valeur personnalisée 1 => AMATEUR ; Valeur personnalisée 2 => CONFIRME ; Valeur personnalisée 3 => PROFESSIONNEL
        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('Amateur');
        $listingCharacteristicValue->translate('fr')->setName('Amateur');
        $listingCharacteristicValue->setPosition(1);
        /** @var ListingCharacteristicType $listingCharacteristicType */
        $listingCharacteristicType = $manager->merge($this->getReference('characteristic_type_sport_level'));
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('sport_level_amateur', $listingCharacteristicValue);

        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('Confirmed');
        $listingCharacteristicValue->translate('fr')->setName('Confirmé');
        $listingCharacteristicValue->setPosition(2);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('sport_level_confirmed', $listingCharacteristicValue);
        
        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('Professional');
        $listingCharacteristicValue->translate('fr')->setName('Professionnel');
        $listingCharacteristicValue->setPosition(3);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('sport_level_professional', $listingCharacteristicValue);

        //Pour le NOMBRE DE PERSONNES : il faudrait voir un système pour mettre 1 à 5 ; +5; +10
        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('1');
        $listingCharacteristicValue->translate('fr')->setName('1');
        $listingCharacteristicValue->setPosition(1);
        /** @var ListingCharacteristicType $listingCharacteristicType */
        $listingCharacteristicType = $manager->merge($this->getReference('characteristic_type_nb_person'));
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('sport_level_2', $listingCharacteristicValue);

        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('2');
        $listingCharacteristicValue->translate('fr')->setName('2');
        $listingCharacteristicValue->setPosition(2);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('sport_level_2', $listingCharacteristicValue);
        
        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('3');
        $listingCharacteristicValue->translate('fr')->setName('3');
        $listingCharacteristicValue->setPosition(3);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('sport_level_3', $listingCharacteristicValue);
        
        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('4');
        $listingCharacteristicValue->translate('fr')->setName('4');
        $listingCharacteristicValue->setPosition(4);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('sport_level_4', $listingCharacteristicValue);
        
        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('5');
        $listingCharacteristicValue->translate('fr')->setName('5');
        $listingCharacteristicValue->setPosition(5);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('sport_level_5', $listingCharacteristicValue);
        
        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('+5');
        $listingCharacteristicValue->translate('fr')->setName('+5');
        $listingCharacteristicValue->setPosition(6);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('sport_level_more_5', $listingCharacteristicValue);
        
        $listingCharacteristicValue = new ListingCharacteristicValue();
        $listingCharacteristicValue->translate('en')->setName('+10');
        $listingCharacteristicValue->translate('fr')->setName('+10');
        $listingCharacteristicValue->setPosition(7);
        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
        $manager->persist($listingCharacteristicValue);
        $listingCharacteristicValue->mergeNewTranslations();
        $manager->flush();
        $this->addReference('sport_level_more_10', $listingCharacteristicValue);


    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 5;
    }

}
