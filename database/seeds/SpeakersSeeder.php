<?php

use Illuminate\Database\Seeder;

class SpeakersSeeder extends Seeder {
    /**
     * Seeder for both schedule talk events AND speakers
     * since speakers need to be binded to the talks
     *
     * @return void
     */
    public function run() {

        $speakers = [
            App\Speaker::updateOrCreate(['sid' => 'styllas'], [
                'name' => [
                    'en' => 'Michael Styllas',
                    'el' => 'Μιχάλης Στύλλας'
                ],
                'occupation' => [
                    'en' => 'Geology Researcher – Mountaineer',
                    'el' => 'Ερευνητής Γεωλογίας – Ορειβάτης'
                ],
                'quote' => [
                    'en' => 'Flat roads and straight lines, hide the beauty of life',
                    'el' => 'Flat roads and straight lines, hide the beauty of life'
                ],
                'visible' => true,
                'img_src' => 'styllas-1.jpg',
                'img_src_alt' => 'styllas-2.jpg',
                'link' => 'https://www.researchgate.net/profile/Michael_Styllas',
                'bio' => [
                    'en' => '
Michael Styllas was attracted to the mountains from a very young age. This, gradually led him to fall in love with the science of Geology. He received his BSc degree in Geology in 1998 from Aristotle University of Thessaloniki to continue his studies in the College of Oceanic and Atmospheric Sciences of Oregon State University (USA), where he received his Master’s in Science (MSc) degree in Oceanography – Marine Geology. During his PhD he received an EU sponsored Marie Curie Early Stag.e Researcher Fellowship, where he was specialized in the field of Paleoclimatology in Bjerknes Centre for Climate Research of the University of Bergen, in Norway. He received his PhD diploma in Geology – Sedimentology in 2009 from Aristotle University of Thessaloniki.

Since 2006 he works as an external geologist for GEOSERVICE Ltd, with which has realized numerous geophysical, geotechnical and geoarchaeological projects, and has participated in four EU-funded projects that mainly deal with sustainability and reuse methods and technologies of water resources through the artificial recharge of aquifers. Between 2015-2017 and as an independent researcher he studied the evolution of glaciers and the climate on Mount Olympus in Greece, during a project funded by John S. Latsis foundation in cooperation with researchers from the French National research institute CEREGE (Centre de Recherche et d’Enseignement de Géosciences de l’Environnement).

In addition to his academic activities, since 2004 he has been managing the alpine refuge Christos Kakkalos on Mount Olympus and has climbed extensively on the mountains of Greece, as well as on the peaks of the Alps, Norway, Russia and North America. He has participated in 10 expeditions in the Andes and the Himalaya and was a member of the first successful Greek expedition that stood on the summit of Mount Everest.
',
                    'el' => '
O Μιχάλης Στύλλας αγάπησε τα βουνά από πολύ μικρή ηλικία. Αυτό σταδιακά τον οδήγησε στην επιστήμη της Γεωλογίας. Το 1998 έλαβε το πτυχίο γεωλογίας από το Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης και συνέχισε τις σπουδές του στο Oregon State University – College of Oceanic and Atmospheric Sciences (Η.Π.Α.) από όπου απέκτησε το Master of Science (MSc) το 2001 στην Ωκεανογραφία – Θαλάσσια Γεωλογία. Στα πλαίσια εκπόνησης της διδακτορικής του διατριβής έλαβε την υποτροφία της Ευρωπαϊκής Ένωσης Marie Curie Early Stage Researcher, όπου ειδικεύτηκε στην παλαιοκλιματολογία στο Bjerknes Centre for Climate Research του Πανεπιστημίου του Bergen στη Νορβηγία, ενώ 2009 απέκτησε το Διδακτορικό (Ph.D.) του από το Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης.

Από το 2006 εργάζεται ως εξωτερικός συνεργάτης στη εταιρία γεωλογικών, γεωφυσικών και περιβαλλοντικών μελετών GEOSERVICE LTD με την οποία εκτός από πληθώρα γεωτεχνικών και αρχαιολογικών μελετών έχει συμμετάσχει σε μεγάλα Ευρωπαϊκά ερευνητικά προγράμματα με αντικείμενο τις νέες μεθόδους και τεχνολογίες χρήσης των όμβριων και επεξεργασμένων υδάτων και του τεχνητού εμπλουτισμού των υδροφόρων στρωμάτων. Μεταξύ των ετών 2015 – 2017, και ως ανεξάρτητος ερευνητής σε συνεργασία με ερευνητές του Γαλλικού ερευνητικού ινστιτούτου CEREGE (Centre de Recherche et d’Enseignement de Géosciences de l’Environnement), έλαβε χρηματοδότηση από το Κοινωφελές Ίδρυμα Λάτση για την εκπόνηση μελέτης σχετικά με την ύπαρξη των παγετώνων στον Όλυμπο από την Νεολιθική εποχή μέχρι σήμερα.

Παράλληλα με τις ερευνητικές του δραστηριότητες, από το 2004 μέχρι και σήμερα διαχειρίζεται το ορεινό καταφύγιο Χρήστος Κάκκαλος στο Οροπέδιο των Μουσών του Ολύμπου, έχει πραγματοποιήσει πολυάριθμες αναβάσεις στα Ελληνικά βουνά, καθώς και στις κορυφές των Άλπεων, της Νορβηγίας της Ρωσίας και της Βόρειας Αμερικής, ενώ έχει συμμετάσχει σε 10 ορειβατικές αποστολές στα Ιμαλάια και τις Άνδεις. Το 2004 ήταν μέλος της πρώτης Ελληνικής αποστολής που επιτυχώς κατάφερε να ανέβει στο Έβερεστ.'
                ]
            ]),

            App\Speaker::updateOrCreate(['sid' => 'romy-lorenz'], [
                'name' => [
                    'en' => 'Romy Lorenz',
                    'el' => 'Romy Lorenz'
                ],
                'occupation' => [
                    'en' => 'Cognitive Neuroscientist',
                    'el' => 'Γνωσιακή Νευροεπιστήμονας'
                ],
                'quote' => [
                    'en' => 'Gravity is the root of lightness; stillness, the ruler of movement. ~ Lao Tzu',
                    'el' => 'Gravity is the root of lightness; stillness, the ruler of movement. ~ Lao Tzu'
                ],
                'visible' => true,
                'img_src' => 'romy-lorenz-1.jpg',
                'img_src_alt' => 'romy-lorenz-2.jpg',
                'link' => 'http://www.romylorenz.com',
                'bio' => [
                    'en' => '
Romy Lorenz is a cognitive neuroscientist with a multidisciplinary background in psychology and biomedical engineering.
Currently, she is a Postdoctoral Research Fellow in the Computational, Cognitive and Clinical Neuroimaging Lab ([C3NL](https://www.c3nl.com)) at Imperial College London. In September this year, she will take up her 4-year long Sir Henry Wellcome Postdoctoral Fellowship to work with [John Duncan](http://www.neuroscience.cam.ac.uk/directory/profile.php?johnduncan) at Cambridge University (UK) and [Russ Poldrack](https://poldracklab.stanford.edu/) at Stanford University (US).
Her research interest lies in developing brain-computer interfaces (BCIs) and artificial intelligence (AI) using different neuroimaging techniques and by applying machine learning. Rather than looking at BCIs through the lens of assistive technology though, she is passionate about using BCIs as a new experimental paradigm in cognitive neuroscience.
She received her PhD from Imperial College London in June 2017, under the supervision of [Robert Leech](https://kclpure.kcl.ac.uk/portal/robert.leech.html). For her PhD, she has developed an "[AI neuroscientist](https://www.wired.co.uk/article/automatic-neuroscientist-ai-brain-experiments)" – a novel BCI for optimizing experimental design by combining real-time fMRI with Bayesian optimization.
Alongside her research, she is working as a co-director for [AXNS](https://axnscollective.org/), a curatorial collective interested in the intersection between neuroscience and art.',
                    'el'=> '
Η Romy Lorenz είναι γνωσιακή νευροεπιστήμονας με σπουδές στην ψυχολογία και τη βιοϊατρική μηχανική. Είναι μεταδιδακτορική ερευνήτρια στο Computational, Cognitive and Clinical Neuroimaging Lab ([C3NL](https://www.c3nl.com)) στο Imperial College στο Λονδίνο. Τον ερχόμενο Σεπτέμβρη, θα λάβει την τετραετή μεταδιδακτορική υποτροφία "Sir Henry Wellcome" και θα συνεργαστεί με τους [John Duncan](http://www.neuroscience.cam.ac.uk/directory/profile.php?johnduncan) (Cambridge, UK) και [Russ Poldrack](https://poldracklab.stanford.edu/) (Stanford, US).

Γενικά, το ερευνητικό ενδιαφέρον της επικεντρώνεται στην ανάπτυξη brain-machine interfaces (BCIs) και στην τεχνητή νοημοσύνη με τη χρήση τεχνικών νευροαπεικόνισης και μηχανικής μάθησης. Αντί να εξετάζει τα BCIs υπό το πρίσμα της υποστηρικτικής τεχνολογίας, είναι παθιασμένη με τη χρήση των BCIs ως ένα νέο πειραματικό μοντέλο στη γνωσιακή νευροεπιστήμη.

Έλαβε το διδακτορικό της από το Imperial College London τον Ιούνιο του 2017, υπό την επίβλεψη του [Robert Leech](https://kclpure.kcl.ac.uk/portal/robert.leech.html). Εκεί, ανέπτυξε το σύστημα "[AI neuroscientist](https://www.wired.co.uk/article/automatic-neuroscientist-ai-brain-experiments)" - ένα νέο BCI για τη βελτιστοποίηση του πειραματικού σχεδιασμού. Παράλληλα με την έρευνά της, είναι συνδιευθύντρια στον σύλλογο [AXNS](https://axnscollective.org/), που έχει στόχο τη συνάντηση τέχνης και επιστήμης.',
                ]
            ]),

            App\Speaker::updateOrCreate(['sid' => 'themis-sapsis'], [
                'name' => [
                    'en' => 'Themis Sapsis',
                    'el' => 'Θέμης Σαψής'
                ],
                'occupation' => [
                    'en' => 'Associate Professor of Mech. Engineering at MIT',
                    'el' => 'Αναπληρωτής Καθηγητής στο τμήμα Μηχ. Μηχανικών του MIT'
                ],
                'quote' => [
                    'en' => 'Everything is logic, dreaming is the rest',
                    'el' => 'Everything is logic, dreaming is the rest'
                ],
                'visible' => true,
                'img_src' => 'themis-sapsis-1.jpg',
                'img_src_alt' => 'themis-sapsis-2.jpg',
                'link' => 'http://sandlab.mit.edu/index.php/people/11-web-articles/46-themistoklis-sapsis',
                'bio' => [
                    'en' => '
Dr. Sapsis is the Doherty Associate Professor of Mechanical Engineering at MIT, where he has been a faculty since 2013. He received a diploma in Naval Architecture and Marine Engineering from National Technical University of Athens, Greece and a Ph.D. in Mechanical Engineering from MIT. Before becoming a faculty at MIT he was appointed as Research Scientist at the Courant Institute of Mathematical Sciences at New York University.

His research interests focus on the understanding of chaotic and turbulent dynamical systems by means of probabilistic methods. He is particularly interested on the prediction and quantification of extreme event phenomena in complex systems. He has received three Young Investigator Awards from Naval-, Army- and Air-Force- Research Offices, as well as the Alfred P. Sloan Research Fellowship in Ocean Sciences.',
                    'el' => '
Ο Δρ. Σαψής είναι Αναπληρωτής Καθηγητής στο τμήμα Μηχανολόγων Μηχανικών του MIT. Έλαβε το πτυχίο του από το τμήμα Ναυπηγών Μηχανικών του Εθνικού Μετσόβιου Πολυτεχνείου και το διδακτορικό δίπλωμα στη Μηχανολογία από το MIT. Πριν από το ΜΙΤ, εργάστηκε ως ερευνητής στο Ινστιτούτο Μαθηματικών Courant του New York University.

Τα ερευνητικά του ενδιαφέροντα εστιάζονται στην κατανόηση των χαοτικών δυναμικών συστημάτων με τη χρήση πιθανοτικών μεθόδων. Ενδιαφέρεται ιδιαίτερα για την πρόβλεψη και την ποσοτικοποίηση των ακραίων φαινομένων σε περίπλοκα συστήματα. Έχει λάβει τρία βραβεία νέων ερευνητών από τα Γραφεία Έρευνας του Ναυτικού και της Πολεμικής Αεροπορίας των ΗΠΑ, καθώς και την ερευνητική Υποτροφία Alfred P. Sloan στις ωκεανικές επιστήμες.
',
                ]
            ]),

            App\Speaker::updateOrCreate(['sid' => 'caroline-bos'], [
                'name' => [
                    'en' => 'Caroline Bos',
                    'el' => 'Caroline Bos'
                ],
                'occupation' => [
                    'en' => 'Principal Urban Planner – Co-founder of UNStudio',
                    'el' => 'Αστική Σχεδιάστρια – Συνιδρύτρια του UNStudio'
                ],
                'quote' => [
                    'en' => 'The key to future-proofing our cities does not lie in big data itself, but in the people who generate this data in the first place.',
                    'el' => 'The key to future-proofing our cities does not lie in big data itself, but in the people who generate this data in the first place.'
                ],
                'visible' => true,
                'img_src' => 'caroline-bos-1.jpg',
                'img_src_alt' => 'caroline-bos-2.jpg',
                'link' => 'https://www.unstudio.com/team?group=position',
                'bio' => [
                    'en' => '
Caroline Bos studied History of Art at Birkbeck College of the University of London and Urban and Regional Planning at the Faculty of Geosciences, University of Utrecht. In 1988 she co-founded Van Berkel & Bos Architectuurbureau with the architect Ben van Berkel, extending her theoretical and writing projects to the practice of architecture.

In 1998 Caroline Bos co-founded UNStudio (United Net). UNStudio presents itself as a network of specialists in architecture, urban development and infrastructure. Realized projects include the Erasmus Bridge in Rotterdam, the Mercedes-Benz Museum in Stuttgart and Arnhem Central Station in the Netherlands.

Caroline Bos has taught as a guest lecturer at Princeton University, the Berlage Institute in Rotterdam, the Academy of Fine Arts in Vienna and the Academy of Architecture in Arnhem. In 2012 she was awarded an Honorary Professorship at the University of Melbourne\'s Faculty of Architecture, Building and Planning.
',
                    'el' => '
Η Caroline Bos σπούδασε Ιστορία της Τέχνης στο Birkbeck College του Πανεπιστημίου του Λονδίνου και Αστικό & Περιφερειακό Σχεδιασμό στο τμήμα Γεωεπιστημών του Πανεπιστημίου της Ουτρέχτης. Το 1988 ίδρυσε μαζί με τον αρχιτέκτονα Ben van Berkel το Van Berkel & Bos Architectuurbureau, επεκτείνοντας το θεωρητικό και γραπτό της έργο στην πρακτική της αρχιτεκτονικής.

Το 1998, η Caroline Bos ίδρυσε το UNStudio (United Net). Το UNStudio παρουσιάζεται ως ένα δίκτυο ειδικών στην αρχιτεκτονική, την αστική ανάπτυξη και τις υποδομές. Τα υλοποιημένα έργα περιλαμβάνουν τη Γέφυρα Erasmus στο Ρότερνταμ, το Μουσείο Mercedes-Benz στη Στουτγάρδη και τον Κεντρικό Σταθμό του Arnhem στην Ολλανδία.

Η Caroline Bos έχει διδάξει ως προσκεκλημένη καθηγήτρια στο Πανεπιστήμιο του Princeton, στο Ινστιτούτο Berlage στο Ρότερνταμ, στην Ακαδημία Καλών Τεχνών της Βιέννης καθώς και στην Ακαδημία Αρχιτεκτονικής του Arnhem. Το 2012 βραβεύτηκε ως Επίτιμη Καθηγήτρια στο Τμήμα Αρχιτεκτόνων, Κτιρίων και Σχεδιασμού του Πανεπιστημίου της Μελβούρνης.
',
                ]
            ]),

            App\Speaker::updateOrCreate(['sid' => 'ioanna-theodorou'], [
                'name' => [
                    'en' => 'Ioanna Theodorou',
                    'el' => 'Ιωάννα Θεοδώρου'
                ],
                'occupation' => [
                    'en' => 'Social Enterpreneur – Founder of Campfire Innovation',
                    'el' => 'Κοινωνική επιχειρηματίας – Ιδρύτρια του Campfire Innovation'
                ],
                'quote' => [
                    'en' => 'The best way is always through',
                    'el' => 'The best way is always through'
                ],
                'visible' => true,
                'img_src' => 'ioanna-theodorou-1.jpg',
                'img_src_alt' => 'ioanna-theodorou-2.jpg',
                'link' => 'https://campfireinnovation.org/profile/ioanna/',
                'bio' => [
                    'en' => '
Ioanna uses the startup mentality to reimagine how social impact can be achieved.

In 2015, she became involved in the refugee crisis in Greece as a volunteer aid coordinator. She then launched Campfire Innovation, an organisation building an ecosystem to develop more innovative solutions for refugee aid, from the grassroots up.

Ioanna became a WEF Global Shaper in 2016. She was also a founding member of Reload Greece in 2012-2015.
She lived across Europe and the Middle East and holds degrees in History of Art (University College London) and a MA in International Cultural Policy & Management (University of Warwick).
',
                    'el' => '
Η Ιωάννα είναι κοινωνική επιχειρηματίας που γεφυρώνει τη λογική των startups με την κοινωνική προσφορά.

Το 2015, έχοντας ζήσει στην Συρία και διαμένοντας πλέον στην Ελλάδα, δραστηριoποιήθηκε εντατικά ως εθελόντρια και συντονίστρια στο προσφυγικό. Στην συνέχεια δημιούργησε το Campfire Innovation, μια οργάνωση που χαρτογραφεί και δικτυώνει της δράσεις της κοινωνίας των πολιτών στην ανθρωπιστική βοήθεια και υποστηρίζει την ανάπτυξη καινοτόμων λύσεων.

Η Ιωάννα έγινε Global Shaper το 2016. Είναι επίσης συνιδρύτρια του Reload Greece και με την επιστροφή της στην Ελλάδα, έχει εμπλακεί ενεργά στον χώρο της κοινωνικής επιχειρηματικότητας, κυρίως μέσα από τον ρόλο της στην δημιουργία του πρώτου προγράμματος υποστήριξης κοινωνικών επιχειρηματιών του Δήμου Αθηναίων το 2013.

Πηγή έμπνευσης για τις δράσεις τις αποτελούν η διεθνής και καλλιτεχνική της εκπαίδευση. Έχει ζήσει στην Ευρώπη και τη Μέση Ανατολή, τελείωσε το Γαλλικό σχολείο στο Λονδίνο και κατέχει Bachelor στην Ιστορία Τέχνης (University College London 2011) και Μάστερ στη Διοίκηση Πολιτιστικών ΜΚΟ (University of Warwick 2012).
',
                ]
            ]),

            App\Speaker::updateOrCreate(['sid' => 'vassilios-makios'], [
                'name' => [
                    'en' => 'Vassilios Makios',
                    'el' => 'Βασίλειος Μακιός'
                ],
                'occupation' => [
                    'en' => 'General Director at Corallia – Professor Emeritus at University of Patras',
                    'el' => 'Γενικός Διευθυντής του Corallia – Ομότιμος καθηγητής του Πανεπιστημίου Πατρών'
                ],
                'quote' => [
                    'en' => 'Come to us with the joy of creation...',
                    'el' => 'Come to us with the joy of creation...'
                ],
                'visible' => true,
                'img_src' => 'vassilios-makios-1.jpg',
                'img_src_alt' => 'vassilios-makios-2.jpg',
                'link' => 'http://www.corallia.org/en/about-corallia/team.html',
                'bio' => [
                    'en' => '
Vassilios Makios received his Electrical Engineering degree from the Technical University in Munich, and the Ph.D from the Max Planck Institute for Plasmaphysics and the Technical University in Munich. He was Research Associate in the Max Planck Institute for Plasmaphysics in Munich, where he was associated with microwave interaction studies on plasmas. He served as a professor in the Department of Electronics, Carleton University in Ottawa, Canada. From 1977 he is an honorary research professor of Carleton University. From 1977 he was a professor of Engineering in the Electrical Engineering Department of the University of Patras. He has published over 150 papers and numerous patents. He has received the silver medal and the golden medal of the German Electrical Engineering Society (VDE) and has also received the IEEE 2000 Chester Sall Award for the 2nd place Transaction Award Paper.

He is a senior member of the IEEE, member of the Canadian Association of Physicists, the German Physical Society and the VDE, Professional Engineer of the Province of Ontario and the Greek Technical Chamber. He has served as President of the Research Center Athena. In 2006, he co-founded the Hellenic Technology Clusters Initiative-Corallia, and is up to date the Head of the Unit. He plays an instrumental role in the design and implementation of interventions introduced by Corallia with a vision “to sustain a Greek environment with the right framework conditions to allow sciences, innovation and entrepreneurship to flourish again” and ultimate goal “to establish the brand Innovation Designed in Greece”.
',
                    'el' => '
Ο Βασίλειος Μακιός έλαβε Δίπλωμα Ηλεκτρολόγου Μηχανικού από το Πολυτεχνείο του Μονάχου και Διδακτορικό από το Max Planck Institut fur Plasmaphysik Garching. Έχει διατελέσει επιστημονικός συνεργάτης στο Max Planck Institut fur Plasmaphysik στο Μόναχο, και καθηγητής στο Τμήμα Ηλεκτρονικών του Carleton University στην Οτάβα του Καναδά, στο οποίο έγινε επίτιμος καθηγητής. Tο 1977 εξελέγη καθηγητής στο τμήμα Ηλεκτρολόγων Μηχανικών και Τεχνολογίας Υπολογιστών του Πανεπιστημίου Πατρών. Έχει κάνει πάνω από 150 δημοσιεύσεις και κατέχει πολυάριθμα διπλώματα ευρεσιτεχνίας. Είναι κάτοχος του ασημένιου και χρυσού μεταλλίου της Γερμανικής Εταιρείας Ηλεκτρολόγων Μηχανικών (VDE). Έλαβε από την ΙΕΕΕ το Chester Sall Award της ΙΕΕΕ Consumer Electronics Society για την δεύτερη καλύτερη δημοσίευση στα περιοδικά της για το έτος 2000.

Είναι μέλος της ΙΕΕΕ, μέλος του Canadian Association of Physicists, της German Physical Society, του VDE, και του ΤΕΕ. Έχει διετελέσει Γενικός Δ/ντής και Πρόεδρος του Διοικητικού Συμβουλίου του Ερευνητικού Κέντρου Αθηνά και διευθυντής του Ινστιτούτου Βιομηχανικών Συστημάτων. Έχει συμβάλει στην ανάπτυξη σημαντικού αριθμού επιχειρήσεων υψηλής τεχνολογίας στην Ελλάδα και από το 2005 είναι Γενικός Διευθυντής του Corallia.
',
                ]
            ]),

            App\Speaker::updateOrCreate(['sid' => 'aimilios-chalamandaris'], [
                'name' => [
                    'en' => 'Aimilios Chalamandaris',
                    'el' => 'Αιμίλιος Χαλαμανδάρης'
                ],
                'occupation' => [
                    'en' => 'Co-founder and CEO of Innoetics',
                    'el' => 'Συνιδρυτής και CEO της Innoetics'
                ],
                'quote' => [
                    'en' => 'Hard work and love for what you are doing, always leads to success.',
                    'el' => 'Ο μόνος τρόπος να πετύχεις αυτό που θέλεις, εκτός από την επιμονή, είναι και η αγάπη σε αυτό που κάνεις.'
                ],
                'visible' => true,
                'img_src' => 'aimilios-chalamandaris-1.jpg',
                'img_src_alt' => 'aimilios-chalamandaris-2.jpg',
                'link' => 'https://www.innoetics.com/about/',
                'bio' => [
                    'en' => '
Dr. Aimilios Chalamandaris is a co-founder and CEO of Innoetics. He holds a BA and a PhD in Electrical and Computer Engineering from the NTUA, as well as a master’s degree in Telecommunications and Digital Signal Processing from the Imperial College of London. He has authored more than 30 original scientific papers, and is one of the founding members of the team, which developed one of the world’s leading synthetic speech technologies.

From 2008 until today, as CEO of the company, he has led to the establishment of Innoetics as one of the most important companies of synthetic speech internationally, culminating in its acquisition by Samsung Electronics in 2017.
',
                    'el' => '
Ο Δρ. Αιμίλιος Χαλαμανδάρης είναι συνιδρυτής και CEO της εταιρίας Innoetics. Έχει λάβει το διδακτορικό του τίτλο και το πτυχίο του Ηλεκτρολόγου Μηχανικού και Μηχανικού Η/Υ από το ΕΜΠ, καθώς και το μεταπτυχιακό τίτλο Τηλεπικοινωνιών και Ψηφιακής Επεξεργασίας Σήματος από το Imperial College του Λονδίνου. Έχει συγγράψει περισσότερες από 30 πρωτότυπες επιστημονικές εργασίες, ενώ αποτελεί ένα από τα ιδρυτικά μέλη της ομάδας που ανέπτυξε μια από τις κορυφαίες τεχνολογίες συνθετικής ομιλίας στον κόσμο.

Από το 2008 μέχρι σήμερα ως επικεφαλής της εταιρίας οδήγησε στην καθιέρωση της Innoetics ως μιας από τις σημαντικότερες εταιρίες συνθετικής ομιλίας διεθνώς και την εξαγορά της από την Samsung Electronics το 2017.
',
                ]
            ]),

            App\Speaker::updateOrCreate(['sid' => 'dionysis-zindros'], [
                'name' => [
                    'en' => 'Dionysis Zindros',
                    'el' => 'Διονύσης Ζήνδρος'
                ],
                'occupation' => [
                    'en' => 'PhD student in cryptography and blockchains',
                    'el' => 'Υποψήφιος διδάκτορας στην κρυπτογραφία και τα blockchains'
                ],
                'quote' => [
                    'en' => 'Live as if you were to die tomorrow. Learn as if you were to live forever. ~Mahatma Gandhi',
                    'el' => 'Live as if you were to die tomorrow. Learn as if you were to live forever. ~Mahatma Gandhi'
                ],
                'visible' => true,
                'img_src' => 'dionysis-zindros-1.jpg',
                'img_src_alt' => 'dionysis-zindros-2.jpg',
                'link' => 'https://dionyziz.com/',
                'bio' => [
                    'en' => '
Dionysis is a PhD student in cryptography and blockchain technologies at the University of Athens, working under professor Aggelos Kiayias. He is a security and software engineer by training. His professional experience includes working for DeviantArt in Los Angeles, the Incident Response Development team at Google in Zurich where he developed open source incident response tools, and the Product Security team of Twitter in San Francisco where he helped shape the next version of the Content Security Policy W3C standard. He has founded several start-ups in various fields from social networking to video game development.

Dionysis holds an Electrical and Computer Engineering degree from the National Technical University of Athens with a major in Computer Science. He works for IOHK as a research fellow through a long-term collaboration between IOHK and the Blockchain Technology Lab at the University of Athens.

His research interests include blockchain foundations, provable security of the permissionless consensus layer, decentralized trust, and compression security. He has published and presented at world-class conferences such as Black Hat, Financial Crypto, Real World Crypt and FOSDEM. He is the co-founder of OpenBazaar, the first cryptocurrency-based anonymous decentralized marketplace. Some of his important contributions to the field include Rupture, a compression attack framework; and Trust is Risk, the first Sybil-resilient decentralized trust network.
',
                    'el' => '
Ο Διονύσης είναι υποψήφιος διδάκτορας στα κρυπτονομίσματα και στις τεχνολογίες blockchain στο Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών με επιβλέποντα καθηγητή τον Άγγελο Κιαγιά. Είναι ειδικός στην ασφάλεια και μηχανικός λογισμικού. Η επαγγελματική του εμπειρία περιλαμβάνει την ομάδα του DeviantArt στο Los Angeles, την ομάδα του Incident Response Development της Google στη Zurich όπου ανέπτυξε incident response εργαλεία ανοιχτού λογισμικού και την ομάδα Product Security του Twitter στο San Francisco όπου βοήθησε να ολοκληρωθεί η νεότερη έκδοση του W3C standard για το Content Security Policy.

Ο Διονύσης είναι διπλωματούχος Ηλεκτρολόγος Μηχανικός και Μηχανικός Υπολογιστών από το Εθνικό Μετσόβιο Πολυτεχνείο με κατεύθυνση πληροφορικής. Είναι επίσης research fellow στην IOHK στην οποία συμμετέχει μέσω μίας μακροχρόνιας διατμηματικής συνεργασίας ανάμεσα στην IOHK και στο Εργαστήριο Τεχνολογίας Blockchain του Πανεπιστημίου Αθηνών.

Τα ερευνητικά του ενδιαφέροντα περιλαμβάνουν τα θεμέλια του blockchain, τα sidechains καθώς και οι μεταφορές cross-chain. Έχει δημοσιεύσει και παρουσιάσει σε διεθνή συνέδρια όπως το Black Hat, το Financial Crypto, το Real World Crypt και τη FOSDEM. Είναι συνιδρυτής του OpenBazaar, της πρώτης αποκεντρωμένης ανώνυμης αγοράς βασισμένης στα κρυπτονομίσματα. Μερικές από τις σημαντικές του συμβολές στο χώρο συμπεριλαμβάνουν τα Non-Interactive Proofs of Proof-of-Work (τον πρώτο πρακτικό τρόπο υλοποίησης sidechains χωρίς κεντρική εμπιστοσύνη), το Rupture (ένα σύστημα επιθέσεων συμπίεσης) και το Trust is Risk (το πρώτο αποκεντρωμένο δίκτυο εμπιστοσύνης που αντιστέκεται σε Sybil επιθέσεις).',
                ]
            ]),

            App\Speaker::updateOrCreate(['sid' => 'vassilis-charalabidis'], [
                'name' => [
                    'en' => 'Vassilis Charalabidis',
                    'el' => 'Βασίλης Χαραλαμπίδης'
                ],
                'occupation' => [
                    'en' => 'Founding member, Manager and Artistic Director of BIOS',
                    'el' => 'Ιδρυτής, Διαχειριστής και Καλλιτεχνικός Διευθυντής του BIOS'
                ],
                'quote' => [
                    'en' => 'Creativity is about allowing yourself to make mistakes ; art  is about knowing which one of them to keep',
                    'el' => 'Δημιουργικότητα είναι να επιτρέπεις στον εαυτό σου να κάνει λάθη, και τέχνη ,να ξέρεις ποια από αυτά θα κρατήσεις'
                ],
                'visible' => true,
                'img_src' => 'charalabidis-1.jpg',
                'img_src_alt' => 'charalabidis-2.jpg',
                'link' => 'http://bios.gr',
                'bio' => [
                    'en' => '
Vassilis Haralambidis is founding member, manager and artistic director of BIOS non-profit organization. Bios today operates via 3 separate venues, all located in the center of Athens. The first one is Bios pireos84 (a cultural center for performing arts and cross media), then there is Romantso (the first Greek Creative and cultural Industries Hub) and finally Latraac (a social garden and sports venue). Since founding BIOS in 2001, he has been curating numerous events and performances concerning urban culture, new media and various expressions of contemporary artistic creativity.

As a designer, he has received numerous Greek and European awards and distinctions. He has devoted himself to pioneering a creative based approach to new and social entrepreneurship, best practices and policy, with his main focus currently being social inclusion and regeneration through the creative and cultural industries sector.
',
                    'el' => '
Ο Βασίλης Χαραλαμπίδης είναι ιδρυτικό μέλος, μάνατζερ και καλλιτεχνικός διευθυντής του μη κερδοσκοπικού οργανισμού BIOS. Το Bios σήμερα λειτουργεί 3 ξεχωριστούς χώρους, που βρίσκονται στο κέντρο της Αθήνας. Ένας είναι το Bios pireos84 (πολιτιστικό κέντρο για τις τέχνες και τα νέα μέσα), μετά είναι το Ρομάντσο (ο πρώτος κόμβος δημιουργικών και πολιτιστικών βιομηχανιών) και τέλος το Latraac (κοινωνικός τόπος και το πρώτο skate bowl της Αθήνας). Από την ίδρυση του BIOS το 2001, διοργανώνει πολυάριθμες εκδηλώσεις και παραστάσεις με θέμα την αστική κουλτούρα, τα νέα μέσα και τις διάφορες εκφράσεις της σύγχρονης καλλιτεχνικής δημιουργίας.

Ως γραφίστας έχει λάβει πολυάριθμα ελληνικά και ευρωπαϊκά βραβεία και διακρίσεις. Έχει αφοσιωθεί στη δημιουργία μιας πρωτοποριακής προσέγγισης για τη νέα κοινωνική επιχειρηματικότητα, τις βέλτιστες πρακτικές και την πολιτική, με επίκεντρο την κοινωνική ένταξη και αναγέννηση στον τομέα των δημιουργικών και πολιτιστικών βιομηχανιών.
'
                ]
            ]),

            App\Speaker::updateOrCreate(['sid' => 'lc-architects'], [
                'name' => [
                    'en' => 'Lianou Chalvatzis Architects',
                    'el' => 'Lianou Chalvatzis Architects'
                ],
                'occupation' => [
                    'en' => 'Architects',
                    'el' => 'Αρχιτέκτονες'
                ],
                'quote' => [
                    'en' => 'Architecture is a journey to solve each time a new exciting enigma of space, beauty and experiences.',
                    'el' => 'Architecture is a journey to solve each time a new exciting enigma of space, beauty and experiences.'
                ],
                'visible' => true,
                'img_src' => 'lc-1.jpg',
                'img_src_alt' => 'lc-2.jpg',
                'link' => 'http://www.lc-a.uk/',
                'bio' => [
                    'en' => '
Natassa Lianou and Ermis Chalvatzis are directors of Lianou Chalvatzis Architects (LC-A), based in London. Through their practice they promote their vision about “Smart Design Elegance” as they call their philosophy and design process. They design efficient architectural solutions to real-world problems, which respond and adapt to the current socio-economic environment of each place, time and constrains, connecting people and enabling social interaction. Efficiency, economy, sustainability, materiality and high-aesthetics are the key parameters in their design process. The practice’s work focuses οn commercial building projects, hotels, residential masterplans, and infrastructure schemes as well as high profile smaller scale designs, aiming to bring meaningful design to the everyday lives of a broader audience.

Prior to establishing their firm, they gained rich experience through their trajectory at Zaha Hadid Architects as Senior Architects. Currently, Natassa & Ermis design, lead and deliver some of the most prominent, cutting edge, sustainable buildings in Greek Real Estate market, maintaining always an international outlook, attracting global attention.
',
                    'el' => '
Η Νατάσσα Λιανού και ο Ερμής Χαλβατζής διευθύνουν το αρχιτεκτονικό γραφείο Lianou Chalvatzis Architects (LC-A), με έδρα τους το Λονδίνο. Μέσα από το έργο τους προωθούν το όραμά τους για μια “ευφυή σχεδιαστική κομψότητα” (smart design elegance), όπως αποκαλούν τη φιλοσοφία και τη διαδικασία σχεδιασμού τους. Σχεδιάζουν αποτελεσματικές αρχιτεκτονικές λύσεις σε υπαρκτά προβλήματα, οι οποίες ανταποκρίνονται και προσαρμόζονται στο σημερινό κοινωνικοοικονομικό περιβάλλον κάθε τόπου, χρόνου και περιορισμού, συνδέοντας τους ανθρώπους και προωθώντας την κοινωνική αλληλεπίδραση. Η αποδοτικότητα, η οικονομία, η βιωσιμότητα, η υλικότητα και η υψηλή αισθητική αποτελούν τις βασικές παράμετρους στη διαδικασία σχεδιασμού τους. Το έργο τους επικεντρώνεται σε εμπορικά κτίρια, ξενοδοχεία, κατοικίες, σε έργα υποδομής, καθώς και σε σχέδια μικρότερης κλίμακας, που έχουν σκοπό να αναβαθμίσουν την καθημερινότητα του ευρύτερου συνόλου.

Πριν από την ίδρυση της εταιρείας τους, εργάστηκαν ως κύριοι αρχιτέκτονες στο γραφείο Zaha Hadid Architects, όπου κέρδισαν πολύτιμη εμπειρία. Αυτήν τη στιγμή, η Νατάσσα και ο Ερμής σχεδιάζουν, επιβλέπουν και ετοιμάζονται να παραδώσουν στην ελληνική αγορά ακινήτων μερικά από τα σημαντικότερα, πιο προηγμένα, αλλά και βιώσιμα κτίρια, διατηρώντας πάντα μια διεθνή προοπτική.
',
                ]
            ]),

            App\Speaker::updateOrCreate(['sid' => 'galani'], [
                'name' => [
                    'en' => 'Dimitra Galani',
                    'el' => 'Δήμητρα Γαλάνη'
                ],
                'occupation' => [
                    'en' => 'Artist',
                    'el' => 'Καλλιτέχνις'
                ],
                'quote' => [
                    'en' => 'God does not play dice with the universe. ~Albert Einstein',
                    'el' => 'Ο Θεός δεν παίζει ζάρια με το Σύμπαν. ~Albert Einstein'
                ],
                'visible' => true,
                'img_src' => 'galani-1.jpg',
                'img_src_alt' => 'galani-2.jpg',
                'link' => 'http://www.galani.gr',
                'bio' => [
                    'en' => '
In her distinguished 40-year career Dimitra Galani has made a great contribution to Greek music and culture. She is an exceptional artist, a serious and dignified presence in our country’s music scene. Her enduring cross-generational appeal is based on her unique voice, inherent musicality, powerful stage presence and peerless ability to interpret material by top Greek composers and lyricists, such as Manos Hadjidakis, Mikis Theodorakis, Vassilis Tsitsanis, Manos Loizos, a.o.

In her continuing thirst for information and keen interest for everything new, she tries to keep abreast of current musical trends in Greece and elsewhere. During her long career she has occasionally taken the role of the producer, introducing several young songwriters to the public. Additionally, she has written songs for other singers, as well as music for film, television and the theatre, and won multiple awards in music contests and annual festivals. 
',
                    'el' => '
Η Δήμητρα Γαλάνη αποτελεί μια ξεχωριστή παρουσία στην εξέλιξη του σύγχρονου μουσικού μας πολιτισμού τις τελευταίες δεκαετίες. Μια καλλιτέχνις που ξέρει πως να μαγεύει με την ιδιαιτερότητα και την ομορφιά της φωνής της αλλά και με τις ποικίλες εκφράσεις της δημιουργικότητάς της, που καλύπτουν μια ευρεία μουσική γκάμα προκαλώντας δημιουργικές συνεργασίες που την φέρνουν στην πρώτη γραμμή. Η Δήμητρα έχει συνεργαστεί με τους κορυφαίους συνθέτες μας έχοντας δώσει την φωνή της στον λόγο των σημαντικότερων ποιητών και στιχουργών μας. Την συναντάμε σε σημαντικά έργα που υπογράφονται από τον Χατζιδάκι, τον Τσιτσάνη, τον Θεοδωράκη, τον Λοΐζο κ.ά. ενώ συμπράττει και με όλους τους μουσικούς δημιουργούς της γενιάς της και κάνει ξεχωριστές διεθνείς συνεργασίες.

Ανοιχτή σε όλες τις σύγχρονες μουσικές τάσεις, η Δήμητρα Γαλάνη «καθοδηγεί» ως παραγωγός νεώτερους τραγουδοποιούς ή συνεργάζεται στενά με νέους μουσικούς που προέρχονται από «σκηνές» όπως η electronica, το ευρύτερο rock και η jazz.
'
                ]
            ]),
        ];

    }

}