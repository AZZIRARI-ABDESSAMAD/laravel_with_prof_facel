@extends('layouts.app')

@section('content')

    <main>
        <h1 class="page-title">Nous Contacter</h1>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">
            <!-- Formulaire de contact -->
            <div class="form-container" style="margin: 0;">
                <h2>Formulaire de Contact</h2>
                <form>
                    <div class="form-group">
                        <label for="nom">Nom Complet *</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone">
                    </div>

                    <div class="form-group">
                        <label for="sujet">Sujet *</label>
                        <select id="sujet" name="sujet" required>
                            <option value="">-- Sélectionnez un sujet --</option>
                            <option value="commande">À propos d'une commande</option>
                            <option value="retour">Retour / Échange</option>
                            <option value="produit">Informations sur un produit</option>
                            <option value="technique">Problème technique</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-secondary" style="width: 100%; padding: 15px; font-size: 16px;">
                        Envoyer le message
                    </button>
                </form>
            </div>

            <!-- Informations de contact -->
            <div>
                <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); margin-bottom: 25px;">
                    <h3 style="color: #2c3e50; margin-bottom: 20px;">📞 Nos Coordonnées</h3>
                    
                    <div style="margin-bottom: 25px;">
                        <h4 style="color: #3498db; margin-bottom: 8px;">Siège Social</h4>
                        <p style="color: #555; line-height: 1.8;">
                            MegaShop<br>
                            123 Avenue du Commerce<br>
                            75001 Paris<br>
                            France
                        </p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="color: #3498db; margin-bottom: 8px;">Téléphone</h4>
                        <p style="color: #555;">
                            <strong>Général :</strong> +212 1 23 45 67 89<br>
                            <strong>Support :</strong> +212 1 23 45 67 00<br>
                            <strong>Ventes :</strong> +212 1 23 45 67 99
                        </p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="color: #3498db; margin-bottom: 8px;">Email</h4>
                        <p style="color: #555;">
                            <strong>General :</strong> info@megashop.com<br>
                            <strong>Support :</strong> support@megashop.com<br>
                            <strong>Ventes :</strong> ventes@megashop.com
                        </p>
                    </div>

                    <div>
                        <h4 style="color: #3498db; margin-bottom: 8px;">Horaires d'Ouverture</h4>
                        <p style="color: #555;">
                            Lundi - Vendredi : 9:00 - 18:00<br>
                            Samedi : 10:00 - 16:00<br>
                            Dimanche : Fermé
                        </p>
                    </div>
                </div>

                <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
                    <h3 style="color: #2c3e50; margin-bottom: 20px;">💬 Réseaux Sociaux</h3>
                    <p style="margin-bottom: 15px;">Suivez-nous sur nos réseaux sociaux pour les dernières actualités et offres :</p>
                    <div style="display: flex; gap: 15px;">
                        <a href="#" style="color: #3498db; text-decoration: none; font-weight: bold;">📘 Facebook</a>
                        <a href="#" style="color: #3498db; text-decoration: none; font-weight: bold;">📷 Instagram</a>
                        <a href="#" style="color: #3498db; text-decoration: none; font-weight: bold;">🐦 Twitter</a>
                        <a href="#" style="color: #3498db; text-decoration: none; font-weight: bold;">▶️ YouTube</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Questions fréquemment posées -->
        <section style="background: white; padding: 30px; border-radius: 8px; margin-bottom: 40px;">
            <h2 style="color: #2c3e50; margin-bottom: 30px; border-bottom: 3px solid #3498db; padding-bottom: 15px;">
                ❓ Questions Fréquemment Posées
            </h2>

            <div style="display: grid; gap: 20px;">
                @foreach ($faq as $item)
                <div>
                    <h1>{{$item['question']}}</h1>
                    <p>{{$item['answer']}}</p>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Localisation -->
        <section style="background: white; padding: 30px; border-radius: 8px;">
            <h2 style="color: #2c3e50; margin-bottom: 20px; border-bottom: 3px solid #3498db; padding-bottom: 15px;">
                📍 Où nous trouver
            </h2>
            <p style="color: #555; margin-bottom: 20px;">
                Notre siège social est situé au cœur de Paris. Vous pouvez nous rendre visite sur rendez-vous pour 
                discuter de vos besoins en électroménager et informatique.
            </p>
            <div style="width: 100%; height: 300px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                        border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">
                Carte Google Maps (à intégrer)
            </div>
        </section>
    </main>
@endsection



