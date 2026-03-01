<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Créer le contrôleur : ShopController concernant les routes de accueil, contact, cgv

class ShopController extends Controller
{
    
    // public function index(){
    //     $cgv = [
    //         [
    //             'id' => 1,
    //             'title' => 'Dispositions Générales',
    //             'content' => 'Les présentes Conditions Générales de Vente régissent les relations commerciales entre MegaShop et ses clients.',
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Offres de Produits',
    //             'content' => 'Les produits présentés sur le site sont offerts à titre informatif. Les prix affichés sont valables au moment de leur publication et peuvent être modifiés sans préavis.',
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Commandes et Confirmation',
    //             'content' => 'La commande en ligne constitue une offre d\'achat. La confirmation de commande n\'est effective que lorsque MegaShop a confirmé par écrit l\'acceptation de la commande.',
    //         ],
    //         [
    //             'id' => 4,
    //             'title' => 'Conditions de Règlement',
    //             'content' => 'MegaShop accepte les cartes bancaires, virements, PayPal et paiement en 3/4 fois.',
    //         ],
    //         [
    //             'id' => 5,
    //             'title' => 'Conditions de Livraison',
    //             'content' => 'Livraison gratuite à partir de 50€. Délais : 5-7 jours standard, 2-3 jours express.',
    //         ],
    //     ];
    //     return view('Home', compact('cgv'));
    // }

    public function accueil() {
        $categories = [
            'informatique' => [
                'id' => 'informatique',
                'name' => 'Informatique',
                'slug' => 'informatique',
                'icon' => '💻',
                'description' => 'Ordinateurs, laptops, accessoires informatiques et bien plus...',
                'url' => 'pages/informatique.html',
            ],
            'petit_electromenager' => [
                'id' => 'petit_electromenager',
                'name' => 'Petit Électroménager',
                'slug' => 'petit-electromenager',
                'icon' => '🍳',
                'description' => 'Cafetières, grille-pain, mixeurs, robots culinaires...',
                'url' => 'pages/petit-electromenager.html',
            ],
            'grand_electromenager' => [
                'id' => 'grand_electromenager',
                'name' => 'Grand Électroménager',
                'slug' => 'grand-electromenager',
                'icon' => '❄️',
                'description' => 'Réfrigérateurs, lave-linge, lave-vaisselle, fours...',
                'url' => 'pages/grand-electromenager.html',
            ],
        ];
        $pages = [
                'accueil' => [
                    'id' => 'accueil',
                    'title' => 'Accueil - MegaShop',
                    'url' => 'index.html',
                    'description' => 'Page d\'accueil du site MegaShop',
                ],
                'informatique' => [
                    'id' => 'informatique',
                    'title' => 'Informatique - MegaShop',
                    'url' => 'pages/informatique.html',
                    'description' => 'Catégorie Informatique',
                ],
                'petit_electromenager' => [
                    'id' => 'petit_electromenager',
                    'title' => 'Petit Électroménager - MegaShop',
                    'url' => 'pages/petit-electromenager.html',
                    'description' => 'Catégorie Petit Électroménager',
                ],
                'grand_electromenager' => [
                    'id' => 'grand_electromenager',
                    'title' => 'Grand Électroménager - MegaShop',
                    'url' => 'pages/grand-electromenager.html',
                    'description' => 'Catégorie Grand Électroménager',
                ],
                'produit_detail' => [
                    'id' => 'produit_detail',
                    'title' => 'Détail Produit - MegaShop',
                    'url' => 'pages/produit-detail.html',
                    'description' => 'Page de détail d\'un produit',
                ],
                'cgv' => [
                    'id' => 'cgv',
                    'title' => 'CGV - MegaShop',
                    'url' => 'pages/cgv.html',
                    'description' => 'Conditions Générales de Vente',
                ],
                'contact' => [
                    'id' => 'contact',
                    'title' => 'Contact - MegaShop',
                    'url' => 'pages/contact.html',
                    'description' => 'Page de contact',
                ],
            ];
            
        return view('home', compact('pages','categories'));
    }
    public function contact() {
        $faq = [
            [
                'id' => 1,
                'question' => 'Quelle est la durée standard de livraison ?',
                'answer' => 'La livraison standard prend 5 à 7 jours ouvrables. Une livraison express est également disponible en 2 à 3 jours ouvrables.',
            ],
            [
                'id' => 2,
                'question' => 'Comment puis-je retourner un produit ?',
                'answer' => 'Vous disposez de 30 jours pour retourner votre produit. Veuillez nous contacter pour obtenir une étiquette de retour.',
            ],
            [
                'id' => 3,
                'question' => 'Acceptez-vous les paiements en plusieurs fois ?',
                'answer' => 'Oui, nous proposons le paiement en 3 ou 4 fois sans frais pour les achats supérieurs à 100 €.',
            ],
            [
                'id' => 4,
                'question' => 'Comment puis-je suivre ma commande ?',
                'answer' => 'Un numéro de suivi vous sera envoyé par email après la confirmation de votre commande.',
            ],
            [
                'id' => 5,
                'question' => 'Proposez-vous une garantie sur vos produits ?',
                'answer' => 'Tous nos produits bénéficient d\'une garantie légale de 2 ans.',
            ],
        ];
        return view('contact', compact('faq'));
    }

    public function cgv() {
        $cgv = [
                [
                    'id' => 1,
                    'title' => 'Dispositions Générales',
                    'content' => 'Les présentes Conditions Générales de Vente régissent les relations commerciales entre MegaShop et ses clients.',
                ],
                [
                    'id' => 2,
                    'title' => 'Offres de Produits',
                    'content' => 'Les produits présentés sur le site sont offerts à titre informatif. Les prix affichés sont valables au moment de leur publication et peuvent être modifiés sans préavis.',
                ],
                [
                    'id' => 3,
                    'title' => 'Commandes et Confirmation',
                    'content' => 'La commande en ligne constitue une offre d\'achat. La confirmation de commande n\'est effective que lorsque MegaShop a confirmé par écrit l\'acceptation de la commande.',
                ],
                [
                    'id' => 4,
                    'title' => 'Conditions de Règlement',
                    'content' => 'MegaShop accepte les cartes bancaires, virements, PayPal et paiement en 3/4 fois.',
                ],
                [
                    'id' => 5,
                    'title' => 'Conditions de Livraison',
                    'content' => 'Livraison gratuite à partir de 50€. Délais : 5-7 jours standard, 2-3 jours express.',
                ],
            ];
        return view('cgv', compact('cgv'));
    }
}
