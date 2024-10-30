<?php
/*
Plugin Name: WooCommerce Email Footer Message
Description: Ajoute une mention en bas des emails WooCommerce "Tarifs affichés hors option (voir cgv)".
Version: 1.0
Author: Perodo nicola
*/
// Ajoute le message personnalisé à la fin des emails de commande WooCommerce
function ajouter_mention_footer_email_commande($email) {
    if ($email->id == 'customer_completed_order' || $email->id == 'customer_processing_order' || $email->id == 'customer_invoice') {
        echo '<p style="font-size: 12px; color: #666;">Tarifs affichés hors option (voir CGV)</p>';
    }
}

// Hook pour ajouter le texte au pied de page des emails de commande WooCommerce
add_action('woocommerce_email_footer', 'ajouter_mention_footer_email_commande');
