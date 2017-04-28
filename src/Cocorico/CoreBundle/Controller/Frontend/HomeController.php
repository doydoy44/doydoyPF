<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocorico\CoreBundle\Controller\Frontend;

use Cocorico\CoreBundle\Repository\ListingRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Cocorico\CoreBundle\Entity\ListingCharacteristicType;
use Cocorico\CoreBundle\Entity\ListingCharacteristicValue;
/**
 * Class HomeController
 *
 */
class HomeController extends Controller
{
    /**
     * Fixture reference repository
     * 
     * @var ReferenceRepository
     */
    protected $referenceRepository;
    
    /**
     * {@inheritdoc}
     */
    public function setReferenceRepository(ReferenceRepository $referenceRepository)
    {
        $this->referenceRepository = $referenceRepository;
    }
    /**
     * @Route("/", name="cocorico_home")
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $manager = $this->getDoctrine()->getManager();
                //        //Pour INDOOR/OUTDOOR : Valeur personnalisée 1 => INDOOR et Valeur personnalisée 2 => OUTDOOR
                //        $listingCharacteristicType = new ListingCharacteristicType();
                //        $listingCharacteristicType->setName("indoor_outdoor");
                //        $manager->persist($listingCharacteristicType);
                //        $manager->flush();
                //       // $this->addReference('characteristic_type_indoor_outdoor', $listingCharacteristicType);
                //        //Pour NIVEAU SPORTIF : Valeur personnalisée 1 => AMATEUR ; Valeur personnalisée 2 => CONFIRME ; Valeur personnalisée 3 => PROFESSIONNEL
                //        $listingCharacteristicType = new ListingCharacteristicType();
                //        $listingCharacteristicType->setName("sport_level");
                //        $manager->persist($listingCharacteristicType);
                //        $manager->flush();
                //        //$this->addReference('characteristic_type_sport_level', $listingCharacteristicType);
                //        //Pour le NOMBRE DE PERSONNES : il faudrait voir un système pour mettre 1 à 5 ; +5; +10
                //        $listingCharacteristicType = new ListingCharacteristicType();
                //        $listingCharacteristicType->setName("nb_person");
                //        $manager->persist($listingCharacteristicType);
                //        $manager->flush();
                //        //$this->addReference('characteristic_type_nb_person', $listingCharacteristicType);
                //
                //        $listingCharacteristicType = $manager->getRepository(ListingCharacteristicType::class)->findByName('indoor_outdoor')[0];
                //       //dump($listingCharacteristicType);
                //        //Pour INDOOR/OUTDOOR : Valeur personnalisée 1 => INDOOR et Valeur personnalisée 2 => OUTDOOR
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('Indoor');
                //        $listingCharacteristicValue->translate('fr')->setName('Indoor');
                //        $listingCharacteristicValue->setPosition(1);
                //        /** @var ListingCharacteristicType $listingCharacteristicType */
                //        //$listingCharacteristicType = $manager->merge($this->getReference('characteristic_type_indoor_outdoor'));
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //       // $this->addReference('indoor_outdoor_indoor', $listingCharacteristicValue);
                //
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('Outdoor');
                //        $listingCharacteristicValue->translate('fr')->setName('Outdoor');
                //        $listingCharacteristicValue->setPosition(2);
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('indoor_outdoor_outdoor', $listingCharacteristicValue);
                //
                //        //Pour NIVEAU SPORTIF : Valeur personnalisée 1 => AMATEUR ; Valeur personnalisée 2 => CONFIRME ; Valeur personnalisée 3 => PROFESSIONNEL
                //        $listingCharacteristicType = $manager->getRepository(ListingCharacteristicType::class)->findByName('sport_level')[0];
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('Amateur');
                //        $listingCharacteristicValue->translate('fr')->setName('Amateur');
                //        $listingCharacteristicValue->setPosition(1);
                //        /** @var ListingCharacteristicType $listingCharacteristicType */
                //        //$listingCharacteristicType = $manager->merge($this->getReference('characteristic_type_sport_level'));
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('sport_level_amateur', $listingCharacteristicValue);
                //
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('Confirmed');
                //        $listingCharacteristicValue->translate('fr')->setName('Confirmé');
                //        $listingCharacteristicValue->setPosition(2);
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('sport_level_confirmed', $listingCharacteristicValue);
                //        
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('Professional');
                //        $listingCharacteristicValue->translate('fr')->setName('Professionnel');
                //        $listingCharacteristicValue->setPosition(3);
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('sport_level_professional', $listingCharacteristicValue);
                //
                //        //Pour le NOMBRE DE PERSONNES : il faudrait voir un système pour mettre 1 à 5 ; +5; +10
                //        $listingCharacteristicType = $manager->getRepository(ListingCharacteristicType::class)->findByName('nb_person')[0];
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('1');
                //        $listingCharacteristicValue->translate('fr')->setName('1');
                //        $listingCharacteristicValue->setPosition(1);
                //        /** @var ListingCharacteristicType $listingCharacteristicType */
                //        //$listingCharacteristicType = $manager->merge($this->getReference('characteristic_type_nb_person'));
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('sport_level_2', $listingCharacteristicValue);
                //
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('2');
                //        $listingCharacteristicValue->translate('fr')->setName('2');
                //        $listingCharacteristicValue->setPosition(2);
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('sport_level_2', $listingCharacteristicValue);
                //        
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('3');
                //        $listingCharacteristicValue->translate('fr')->setName('3');
                //        $listingCharacteristicValue->setPosition(3);
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('sport_level_3', $listingCharacteristicValue);
                //        
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('4');
                //        $listingCharacteristicValue->translate('fr')->setName('4');
                //        $listingCharacteristicValue->setPosition(4);
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('sport_level_4', $listingCharacteristicValue);
                //        
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('5');
                //        $listingCharacteristicValue->translate('fr')->setName('5');
                //        $listingCharacteristicValue->setPosition(5);
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('sport_level_5', $listingCharacteristicValue);
                //        
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('+5');
                //        $listingCharacteristicValue->translate('fr')->setName('+5');
                //        $listingCharacteristicValue->setPosition(6);
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('sport_level_more_5', $listingCharacteristicValue);
                //        
                //        $listingCharacteristicValue = new ListingCharacteristicValue();
                //        $listingCharacteristicValue->translate('en')->setName('+10');
                //        $listingCharacteristicValue->translate('fr')->setName('+10');
                //        $listingCharacteristicValue->setPosition(7);
                //        $listingCharacteristicValue->setListingCharacteristicType($listingCharacteristicType);
                //        $manager->persist($listingCharacteristicValue);
                //        $listingCharacteristicValue->mergeNewTranslations();
                //        $manager->flush();
                //        //$this->addReference('sport_level_more_10', $listingCharacteristicValue);
        
        /** @var ListingRepository $listingRepository */
        $listingRepository = $this->getDoctrine()->getRepository('CocoricoCoreBundle:Listing');
        $listings = $listingRepository->findByHighestRanking(6, $request->getLocale());

        return $this->render(
            'CocoricoCoreBundle:Frontend\Home:index.html.twig',
            array(
                'listings' => $listings
            )
        );
    }
    public function addReference($name, $object)
    {
        $this->referenceRepository->addReference($name, $object);
    }
}
