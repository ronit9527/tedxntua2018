<?php

use Illuminate\Database\Seeder;

class GeneralEventsSeeder extends Seeder {
    /**
     * @return void
     */
    public function run() {

        $general = [
            App\Schedule::updateOrCreate(['sid' => 'registration'], [
                'hour' => '10:30',
                'visible' => true,
                'img_src' => '/images/schedule/registration.png',
                'type' => 'general',
                'event_title' => [
                    'en' => 'Reception & Registration',
                    'el' => 'Υποδοχή & Εγγραφή'
                ],
                'event_prev' => [
                    'en' => 'Doors open and breakfast is served (10:30-11:30)',
                    'el' => 'Οι πόρτες ανοίγουν και σερβίρεται πρωινό (10:30-11:30)'
                ],
                'subtitle' => [
                    'en' => 'Don\'t forget to bring your ticket: a **piece of clothing** or a **blanket** that will be given to people in need.',
                    'el' => 'Μην ξεχάσετε το εισιτήριό σας: ένα **ρούχο** ή μία **κουβέρτα** που θα δοθεί σε ανθρώπους που το έχουν ανάγκη.'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'session-1'], [
                'hour' => '11:30',
                'visible' => true,
                'img_src' => '/images/schedule/thumb-emergence.png',
                'type' => 'general',
                'event_title' => [
                    'en' => 'Session 1',
                    'el' => 'Session 1'
                ],
                'event_prev' => [
                    'en' => 'Emergence (11:30-13:00)',
                    'el' => 'Emergence (11:30-13:00)'
                ],
                'subtitle' => [
                    'en' => 'The **big bang**. A moment of randomness leading to the beginning of everything. A new world emerges.',
                    'el' => 'Η **μεγάλη έκρηξη**. Μια στιγμή τυχαιότητας που οδηγεί στην αρχή των πάντων. Ένας νέος κόσμος αναδύεται.'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'break-1'], [
                'hour' => '13:30',
                'visible' => true,
                'img_src' => '/images/schedule/break-1.png',
                'type' => 'general',
                'event_title' => [
                    'en' => '1<sup>st</sup> Break',
                    'el' => '1<sup>ο</sup> Διάλειμμα'
                ],
                'event_prev' => [
                    'en' => 'Lunch, Q&A with the speakers, workshops and equilibrium',
                    'el' => 'Γεύμα, Q&A με τους ομιλητές, workshops και ηρεμία'
                ],
                'subtitle' => [
                    'en' => 'The speakers of the 1<sup>st</sup> session will answer to your **questions** in the Simulcast room and lunch will be served.',
                    'el' => 'Οι ομιλητές του 1<sup>ου</sup> session θα απαντήσουν στις **ερωτήσεις** σας στην Αίθουσα Simulcast και θα σερβιριστεί γεύμα.'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'session-2'], [
                'hour' => '15:00',
                'visible' => true,
                'img_src' => '/images/schedule/thumb-divergence.png',
                'type' => 'general',
                'event_title' => [
                    'en' => 'Session 2',
                    'el' => 'Session 2'
                ],
                'event_prev' => [
                    'en' => 'Divergence (15:00-17:00)',
                    'el' => 'Divergence (15:00-17:00)'
                ],
                'subtitle' => [
                    'en' => 'Evolution at its very best. Change after change, through **divergence** and **contrast**, here comes the cosmos as we know it.',
                    'el' => 'Η εξέλιξη στο αποκορύφωμά της. Αλλαγή με την αλλαγή, μέσα από τις **αποκλίσεις** και τις **αντιθέσεις**, προκύπτει ο κόσμος όπως τον ξέρουμε.'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'break-2'], [
                'hour' => '17:00',
                'visible' => true,
                'img_src' => '/images/schedule/break-2.png',
                'type' => 'general',
                'event_title' => [
                    'en' => '2<sup>nd</sup> Break',
                    'el' => '2<sup>ο</sup> Διάλειμμα'
                ],
                'event_prev' => [
                    'en' => 'Coffee and beverages, Q&A with the speakers, workshops and equilibrium',
                    'el' => 'Καφές και ποτά, Q&A με τους ομιλητές, workshops και ηρεμία'
                ],
                'subtitle' => [
                    'en' => 'The speakers of the 2<sup>nd</sup> session will answer to your **questions** in the Simulcast room. Coffee and beverages will be served.',
                    'el' => 'Οι ομιλητές του 2<sup>ου</sup> session θα απαντήσουν στις **ερωτήσεις** σας στην Αίθουσα Simulcast. Θα σερβιριστεί καφές και ποτά (αναψυκτικά, ροφήματα κλπ).'
                ],
            ]),

            App\Schedule::updateOrCreate(['sid' => 'session-3'], [
                'hour' => '18:00',
                'visible' => true,
                'img_src' => '/images/schedule/thumb-convergence.png',
                'type' => 'general',
                'event_title' => [
                    'en' => 'Session 3',
                    'el' => 'Session 3'
                ],
                'event_prev' => [
                    'en' => 'Convergence (18:00-20:00)',
                    'el' => 'Convergence (18:00-20:00)'
                ],
                'subtitle' => [
                    'en' => 'The end of an era or the beginning of a new one. The **bittersweet** taste, as the universe slowly converges to the **very first state** where it started from.',
                    'el' => 'Το τέλος μιας εποχής ή το ξεκίνημα μίας καινούριας. Η **γλυκόπικρη** γεύση, καθώς το σύμπαν συγκλίνει αργά στην **πρώτη κατάσταση** από την οποία ξεκίνησε.'
                ],
            ]),
            
            App\Schedule::updateOrCreate(['sid' => 'early-drinks'], [
                'hour' => '20:00',
                'visible' => true,
                'img_src' => '/images/schedule/drinks.jpg',
                'type' => 'general',
                'event_title' => [
                    'en' => 'Early drinks',
                    'el' => 'Early drinks'
                ],
                'event_prev' => [
                    'en' => '',
                    'el' => ''
                ],
                'subtitle' => [
                    'en' => '',
                    'el' => ''
                ],
            ]),
            
            App\Schedule::updateOrCreate(['sid' => 'after-party'], [
                'hour' => '21:30',
                'visible' => true,
                'img_src' => '/images/schedule/romantso.jpg',
                'type' => 'general',
                'event_title' => [
                    'en' => '<a href="https://www.facebook.com/events/402112306897135/">After Party</a>',
                    'el' => '<a href="https://www.facebook.com/events/402112306897135/">After Party</a>'
                ],
                'event_prev' => [
                    'en' => 'Chaos is a Ladder | Romantso',
                    'el' => 'Chaos is a Ladder | Romantso'
                ],
                'subtitle' => [
                    'en' => '
After the chaos, we are waiting for you right after our event, at [Romantso](https://www.facebook.com/biosromantso/) (3-5 Anaxagora, Omonoia) at 21.30 to get to know each other better and have fun.

Join our event on Facebook by clicking [here](https://www.facebook.com/events/402112306897135/)!',
                    'el' => '
Μετά από τόσο chaos, σε περιμένουμε στο τέλος του event μας, στο [Romantso](https://www.facebook.com/biosromantso/) (Αναξαγόρα 3-5, Ομόνοια) στις 21.30 να έρθεις να γνωριστούμε και να περάσουμε καλά.

Μπες στο event μας στο Facebook κάνοντας κλικ [εδώ](https://www.facebook.com/events/402112306897135/)!'
                ],
            ]),
        ];

    }

}