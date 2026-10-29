document.addEventListener("DOMContentLoaded", function () {

    const stateSelect = document.getElementById("state");
    const districtSelect = document.getElementById("district");
    const centerSelect = document.getElementById("center_location");

    if (!stateSelect || !districtSelect || !centerSelect) return;

    const data = {
        "Assam": {
            "Karbi Anglong": [
                "Diphu"
            ],
            "Baksa": [
                "Mushalpur"
            ],
            "Barama": [
                "Barama"
            ],
            "Biswanath": [
                "Biswanath Chariali"
            ],
            "Bongaigaon": [
                "Abhayapuri"
            ],
            "Cachar": [
                "Ghungoor",
                "Shibbari Road Tarapur"
            ],
            "Darrang": [
                "Mangaldar",
                "Sipajhar"
            ],
            "Dibrugarh": [
                "Chowkidingee",
                "Duliajan"
            ],
            "Golaghat": [
                "Bengenakhowa"
            ],
            "Guwahati": [
                "Airport VIP Chowk",
                "Barshapara",
                "Beltola - Tiniali",
                "Ganeshguri, Kachari Basti",
                "Geetanagar",
                "Hatigaon",
                "Khanamukh (Near Jhalukbari)",
                "Lachitnagar",
                "Maligaon",
                "Panjabari",
                "Pathsala",
                "Rehabari",
                "Wireless"
            ],
            "Hailakandi": [
                "Kalibari Road"
            ],
            "Jorhat": [
                "Tarajan",
                "Titabar"
            ],
            "Kamrup": [
                "Mirza",
                "New Guwahati",
                "North Guwahati",
                "Rangia"
            ],
            "Kamrup M": [
                "Lokhra"
            ],
            "Karimganj": [
                "Karimganj"
            ],
            "Kokrajhar District": [
                "Kokrajhar"
            ],
            "Kumarikata": [
                "Kumarikata"
            ],
            "Morigaon": [
                "Morigaon"
            ],
            "Nalbari": [
                "Nalbari",
                "Tihu"
            ],
            "North Lakhimpur": [
                "North Lakhimpur"
            ],
            "Silchar": [
                "Central Road",
                "Hailakandi Road"
            ],
            "Sivasagar": [
                "Nazira",
                "Sivasagar"
            ],
            "Sonitpur": [
                "Jamugurihat",
                "Mission Chariali"
            ],
            "Tamulpur district": [
                "Tamulpur"
            ],
            "Udalguri": [
                "Udalguri"
            ]
        },
        "Chattisgarh": {
            "Ambikapur": [
                "Choprapara"
            ],
            "Bilaspur": [
                "Old Sarkanda",
                "Torwa"
            ],
            "Dhamtari": [
                "Kurud"
            ],
            "Kanker": [
                "Mahurband Para"
            ],
            "Korba": [
                "Transport Nagar"
            ],
            "Mahasamund": [
                "Basna",
                "Pithora",
                "Saraipali"
            ],
            "Pathalgaon": [
                "Koyla Factory Gali"
            ],
            "Raipur": [
                "DDU Nagar",
                "Devendra Nagar",
                "Gayatri Nagar",
                "Kachana",
                "Mahaveer Nagar",
                "Mowa",
                "Saddu",
                "Shailendra Nagar",
                "Tatibandh"
            ],
            "Sarangarh": [
                "Baramkela",
                "Raigarh Road"
            ]
        },
        "Dadra and Nagar Haveli":{
            "Silvassa":[
                "Silvassa"
            ]
        },


        "West_bengal": {
            "Kolkata": [
                "Salt Lake SIP Abacus",
                "Behala SIP Abacus",
                "Garia SIP Abacus",
                "Dum Dum SIP Abacus"
            ],
            "Howrah": [
                "Shibpur SIP Abacus",
                "Bally SIP Abacus"
            ],
            "North 24 Parganas": [
                "Barasat SIP Abacus",
                "Madhyamgram SIP Abacus"
            ],
            "South 24 Parganas": [
                "Sonarpur SIP Abacus",
                "Diamond Harbour SIP Abacus"
            ]
        },
        "Madhya Pradesh": {
            "Bawadia Kalan": [
                "Rohit Nagar"
            ],
            "Bhopal": [
                "Arera Colony",
                "Ashoka Garden",
                "Awadhpuri",
                "Bagmugaliya",
                "Hoshangabad Road",
                "Koh-E-Fiza",
                "Kolar",
                "Lalghati",
                "Neelbad",
                "Nehru Nagar",
                "New Market",
                "Saket Nagar",
                "Salaiya"
            ],
            "Indore": [
                "Sneh Nagar",
                "Usha Nagar"
            ],
            "Jabalpur": [
                "Nalanda Vihar, JDA"
            ],
            "Satna": [
                "Satna"
            ]
        },
        "Meghalaya": {
            "Shillong": [
                "Laitumkharah"
            ]
        },
        "New Delhi": {
            "Janakpuri": [
                "Janakpuri"
            ]
        },
        "Odhisa": {
            "Berhampur": [
                "Prem Nagar"
            ],
            "Bhubaneswar": [
                "Airport, Bhubaneswar",
                "Badagada Brit Colony",
                "Chandrasekharpur",
                "Delta Square",
                "Janpath",
                "Jayadev Vihar",
                "Kalinga Nagar",
                "KIIT Square",
                "Patrapada",
                "Rasulgarh, Khurda",
                "Tankapani - Sai Temple"
            ],
            "Cuttack": [
                "CDA Sector 7",
                "Professor Pada"
            ],
            "Dhenkanal": [
                "Dakhinakali Road"
            ],
            "Jajpur Road": [
                "Jajpur Road"
            ],
            "Jatni": [
                "Jatni"
            ],
            "Sambalpur": [
                "Budharaja",
                "Gole Bazar"
            ],
            "Sundargarh": [
                "Sundargarh"
            ]
        },
        "Puducherry": {
            "Lawspet": [
                "Lawspet"
            ],
            "Puducherry": [
                "Karaikal",
                "Madagadipet",
                "Moolakulam",
                "Mudaliarpet",
                "Rainbow Nagar",
                "Thavalakuppam",
                "Villianur"
            ]
        },
        
        "Punjab": {

            "Amritsar": [
                "Amritsar, Basant Avenue",
                "Amritsar, Brahambutta Market",
                "Jandiala Guru, Model Town"
            ],

            "Bathinda": [
                "Bathinda, Bibiwala Road"
            ],

            "Chandigarh": [
                "Chandigarh, Sec. 33",
                "Chandigarh, Sec. 37"
            ],

            "Fatehgarh Sahib": [
                "Bassi Pathana, Namdev Mandir Road",
                "Sirhind, Fountain Chowk"
            ],

            "Jalandhar": [
                "Jalandhar, Urban Estate 1",
                "Model Town Jalandhar",
                "Phagwara, Guru Hargobind Nagar"
            ],

            "Ludhiana": [
                "Civil Lines - Ludhiana",
                "Ludhiana, BRS Nagar",
                "Ludhiana, Model Town",
                "Ludhiana, Urban Estate Jamalpur"
            ],

            "Mandi Gobindgarh": [
                "Mandi Gobindgarh, Amloh Road"
            ],

            "Mohali": [
                "Mohali, Phase 4",
                "Kharar, Sunny Enclave",
                "Zirakpur N.H., Adj. Hotel Maryland",
                "Zirakpur, VIP Road"
            ],

            "Patiala": [
                "Patiala, Chotti Baradari",
                "Patiala, Urban Estate 1"
            ],

            "Sangrur": [
                "Sangrur, Mann Colony"
            ]
        },




        "Maharashtra": {

            "Mumbai": [
                "Andheri East",
                "Poonam Nagar Andheri East",
                "Breach Candy",
                "Byculla West",
                "Dadar West",
                "Goregaon East - Station",
                "Grant Road",
                "I.C. Colony Borivali West",
                "Juhu - Versova",
                "Kandivali East",
                "Kandivali West - Dhanukarwadi",
                "Lalbaug",
                "Malad West",
                "Mulund West",
                "Powai",
                "Santacruz - East",
                "Vile Parle East & West",
                "Worli"
            ],

            "Navi Mumbai": [
                "Kamothe",
                "Kharghar",
                "Kharghar 34B",
                "Panvel",
                "Sanpada",
                "Sector 20 - Nerul West",
                "Shivaji Chowk, Panvel"
            ],

            "Thane": [
                "Anjurphata",
                "Kasavradavli",
                "Khadakpada",
                "Hiranandani Estates",
                "Mira Road - Kanakia",
                "Vasai East",
                "Navghar - Vasai West",
                "Virar West - Gokul Township"
            ],

            "Pune": [
                "Aundh Sangvi",
                "Baner",
                "Bavdhan South",
                "Bhekrai Nagar",
                "B.T Kawade Road",
                "Chandan Nagar Wadgaon Sheri",
                "Chikhali - Jadhav Wadi",
                "Chinchwad",
                "Dhayari",
                "Gadital, Hadapsar",
                "Gultekdi",
                "Karvenagar",
                "Katraj",
                "Kalevadi",
                "Kondhwa Undri",
                "Kothrud",
                "Kharadi",
                "Lohegaon",
                "Loni Kalbhor",
                "Magarpatta Amanora, Hadapsar",
                "Manjari Bk",
                "Market Yard",
                "Narhe",
                "Pradhikaran",
                "Punawale",
                "Ravet",
                "Sadashiv Peth",
                "Sasane Nagar - Handewadi Road",
                "Sinhagad Road",
                "Talegaon Station Road",
                "Tathwade",
                "Vishrantwadi - Dhanori",
                "Wagholi Awhalwadi Road",
                "Wakad",
                "Wanowrie",
                "Warje - Shivane"
            ],

            "Nagpur": [
                "Besa",
                "Chhaoni",
                "Civil Lines - Nagpur",
                "Dharampeth",
                "Friends Colony",
                "Kamptee",
                "Medical Square",
                "Nandanvan",
                "Pratap Nagar - Nagpur",
                "Wadi"
            ],

            "Nashik": [
                "Ashoka Road",
                "Deopur",
                "Dindori Road, Nimani",
                "Indira Nagar, Nashik",
                "Jail Road, Nashik",
                "N-2 CIDCO",
                "N-8 CIDCO",
                "N4 CIDCO",
                "Panchavati",
                "Tidke Nagar, Untwadi - Nashik"
            ],

            "Aurangabad": [
                "Harsul",
                "Sambhaji Nagar",
                "Waluj"
            ],

            "Amravati": [
                "Amravati",
                "Arvi Naka"
            ],

            "Akola": [
                "Akola"
            ],

            "Beed": [
                "Ambajogai",
                "Chanakyapuri, Beed",
                "Georai",
                "Naik Nagar, Beed Bypass"
            ],

            "Bhandara": [
                "Bhandara",
                "Lakhani"
            ],

            "Chandrapur": [
                "Ballarpur",
                "Chandrapur City Centre",
                "Civil Lines - Chandrapur",
                "CSTPS Chandrapur",
                "Gadchandur",
                "Ghuggus",
                "Rajura"
            ],

            "Dhule": [
                "Amalner",
                "Dondaicha",
                "Shirpur"
            ],

            "Gondia": [
                "Civil Lines - Gondia"
            ],

            "Jalgaon": [
                "Bhusawal",
                "Sahakar Nagar Bhusawal"
            ],

            "Jalna": [
                "Ambad",
                "Old Jalna"
            ],

            "Kolhapur": [
                "Ichalkaranji",
                "Karad",
                "Miraj"
            ],

            "Latur": [
                "Udgir",
                "Omerga City",
                "Old Ausa Road, Driver Colony"
            ],

            "Nanded": [
                "Degloor",
                "Jintur Road"
            ],

            "Parbhani": [
                "Pathardi Phata"
            ],

            "Raigad": [
                "Panvel"
            ],

            "Sangli": [
                "Miraj"
            ],

            "Satara": [
                "Shirwal"
            ],

            "Wardha": [
                "Wardhaman Nagar"
            ],

            "Washim": [
                "Karanja (Lad)"
            ],

            "Yavatmal": [
                "Digras",
                "Pusai",
                "Wani"
            ]
        },



        "Karnataka": {
            "Ballari": [
                "Gandhinagara Ballari"
            ],
            "Belgaum": [
                "Tilakwadi"
            ],
            "Bengaluru": [
                "Akshayanagar DLF",
                "Ananthapura",
                "Ananthnagar",
                "Andrahalli",
                "Basavanagudi",
                "Basaveshwara Nagar",
                "Bharath Nagar",
                "Bhashyam Circle Rajajinagar",
                "Bhuvaneshwari Nagar",
                "BSK II Stage",
                "Chamarajpet",
                "Chikbanavara",
                "Doddakammanahalli",
                "Girinagar",
                "HMT Layout",
                "Horamavu",
                "Hosakerehalli",
                "Hoskote College Road",
                "HSR Layout",
                "Indiranagar",
                "ISRO Layout",
                "J P Nagar 2nd Phase",
                "J P Nagar 8th Phase",
                "Jaraganahalli",
                "Jaya Nagar",
                "Jayanagar 1st Block",
                "Judicial Layout",
                "Kaggalipura",
                "Kalyan Nagar Nagarbhavi",
                "Kammanahalli",
                "Kanaka Nagar",
                "Kasavanahalli",
                "Kattigenahalli",
                "Kengeri",
                "Kodipalya",
                "Koramangala",
                "Kothanur",
                "Kumara Park",
                "Laggere",
                "Mahalakshmi Layout",
                "Malleshwaram",
                "Nagarabhavi D Group Layout",
                "Nagasandra",
                "Nelamangala",
                "New Town Yelahanka",
                "Raja Rajeshwari Nagar",
                "Rajajinagar",
                "Ramamurthy Nagar",
                "RBI Layout",
                "RT Nagar",
                "Sahakar Nagar",
                "Sanjay Nagar",
                "Sarjapura",
                "Seegehalli",
                "Shanthinagar",
                "Shivanahalli, Yelahanka Old Town",
                "Shivaram Karanth Nagar",
                "Singanayakanahalli",
                "Sunkadakatte",
                "Surya City Phase 1",
                "Udayanagar",
                "Ullal Main Road",
                "Uttarahalli",
                "Vajarahalli",
                "Varthur",
                "Vidhyaranyapura",
                "Vijaya Nagar",
                "Yeshwanthpur"
            ],
            "Bijapur": [
                "K C Nagar"
            ],
            "Chikkaballapur": [
                "Chikkaballapur"
            ],
            "Davanagere": [
                "Davanagere",
                "Harihara"
            ],
            "Gadag": [
                "Gadag"
            ],
            "Haveri": [
                "Haveri"
            ],
            "Hospet": [
                "College Road Hospet"
            ],
            "Hubbali": [
                "Keshwapura Hubbali"
            ],
            "Kalaburagi": [
                "Kalaburagi"
            ],
            "Koppal": [
                "Diwatar Nagar"
            ],
            "Mangalore": [
                "Bunts Hostel Mangalore"
            ],
            "Mysuru": [
                "Vijayanagar Mysuru"
            ],
            "Ranebennur": [
                "Ranebennur"
            ],
            "Tumakuru": [
                "Tumakuru"
            ]
        },
        "Kerala": {

            "Alappuzha": [
                "Chengannur",
                "Haripad",
                "Kayamkulam",
                "Mavelikara - Kochalummoodu"
            ],

            "Ernakulam": [
                "Aluva",
                "Kadavanthara",
                "Kakkanad",
                "Kolenchery",
                "Muvattupuzha",
                "Perumbavoor",
                "Tripunithura"
            ],

            "Idukki": [
                "Thodupuzha"
            ],

            "Kannur": [
                "Talap - Kannur"
            ],

            "Kochi": [
                "Kadavanthara",
                "Tripunithura"
            ],

            "Kollam": [
                "Chavara",
                "Karunagappally",
                "Kundara-Arumurikada",
                "Ochira",
                "Punalur",
                "Sasthamcotta",
                "Thevally"
            ],

            "Kottayam": [
                "Ettumanoor",
                "Kottakkal",
                "Kottayam"
            ],

            "Kozhikode": [
                "Athanikkal - West Hill",
                "Chevayoor",
                "Malaparamba",
                "NIT Calicut"
            ],

            "Malappuram": [
                "Kottakkal",
                "Police Lane, Tirur"
            ],

            "Palakkad": [
                "Chandranagar Palakkad",
                "Chittur"
            ],

            "Pathanamthitta": [
                "Adoor",
                "Enathu - Poovattoor",
                "Konni",
                "Kozhencherry",
                "Thiruvalla"
            ],

            "Trivandrum": [
                "Kattakada",
                "Manacaud",
                "Mannanthala",
                "Nedumangad",
                "Neyyattinkara",
                "Pachalloor",
                "Pappanamcode",
                "Pattom",
                "Peroorkada",
                "Pettah",
                "Peyad",
                "Poojapura",
                "Pothencode",
                "Sreekaryam",
                "Varkala",
                "Vattiyoorkavu",
                "Vellayambalam",
                "Vizhinjam"
            ]
        },




        "Tamil Nadu": {
            "Chennai": [
                "Anna Nagar SIP Abacus",
                "Velachery SIP Abacus",
                "Tambaram SIP Abacus"
            ],
            "Coimbatore": [
                "RS Puram SIP Abacus",
                "Gandhipuram SIP Abacus"
            ]
        },

        "Delhi": {
            "New Delhi": [
                "Dwarka, Sector 8",
                "East Arjun Nagar",
                "I.P. Extension",
                "Kalkaji",
                "Lajpat Nagar-3",
                "Mayur Vihar Phase-1",
                "Rajender Nagar",
                "Safdarjung Enclave",
                "Shalimar Bagh",
                "Uttam Nagar"
            ]
        },
        "Haryana":{
            "Faridabad": [
                "Green Field Colony",
                "N.I.T 5",
                "Sector 21 C",
                "Sector 34",
                "Sector 86",
            ],
            "Panchkula": [
                "Panchkula, Sec. 15",
                "Panchkula, Sec. 20",
                "Panchkula, Sec. 26"
            ]
        },
        "Himachal Pradesh":{
            "Baddi": [
                "Omaxe, Baddi"
            ],
            "Mandi": [
                "Sunder Nagar"
            ]
        },
        "India": {
            "Madhya Pradesh": [
                "Gulmohar"
            ]
        },
        "Jharkhand": {

    "Bokaro": [
        "Chas",
        "Chira Chas",
        "Sector 5 Bokaro",
        "Sector 6",
        "Sail City",
        "Saraidhella"
    ],

    "Chakradharpur": [
        "Chakradharpur"
    ],

    "Deoghar": [
        "Deoghar",
        "Bilasi Town"
    ],

    "Dhanbad": [
        "Bank More",
        "Hirapur",
        "Dhaya"
    ],

    "Giridih": [
        "Baralota"
    ],

    "Gumla": [
        "DSP Road Gumla"
    ],

    "Hazaribagh": [
        "Matwari - Hazaribagh"
    ],

    "Jamshedpur": [
        "Adityapur",
        "Adityapur 1",
        "Bistupur",
        "Burma Mines",
        "Gamharia",
        "Jawahar Nagar - Mango",
        "Jugslai",
        "Kadma",
        "Mango - Dimna Road",
        "Mango - Zakirnagar",
        "Sakchi",
        "Sonari",
        "Sundernagar",
        "Telco - Gurudwara",
        "Telco - Prakash Nagar",
        "Tiranga Chowk",
        "Vijaya Garden - Baridih"
    ],

    "Khunti": [
        "Subhash Chowk Khunti"
    ],

    "Lohardaga": [
        "Chattar Bagicha - Lohardaga"
    ],

    "Namkum": [
        "Namkum",
        "Kutiatu Chowk Namkum",
        "Sadabahar Chowk, Namkum"
    ],

    "Palamu": [
        "City Centre"
    ],

    "Ranchi": [
        "Agrico",
        "Ashok Nagar",
        "Bariatu",
        "Bekar Bandh",
        "BIT More",
        "Booty More",
        "Circular Road, Nagrati Chowk",
        "Cooperative Colony",
        "Dangratoli Chowk",
        "Dhurwa",
        "Dhurwa Bus Stand",
        "Doranda",
        "Friends Colony, Ramgarh Cantt",
        "Harmu",
        "Hatia",
        "Hinoo",
        "Hurhuru",
        "ITI Bus Stand",
        "Jhanda Chowk",
        "Kanke",
        "Kanke Jagatpuram",
        "Kanthitad, Ratu",
        "Kathal More",
        "Khelgaon Hotwar",
        "Kokar",
        "Metro Gali R R 2",
        "Morabadi",
        "Nagri",
        "Over Bridge - Nivaranpur",
        "Pandra",
        "Pundag Pipartoli",
        "Shankar Chowk - Ormanjhi",
        "Sindoor Chowk",
        "Singhmore",
        "Upper Bazar"
    ],

    "West Singhbhum": [
        "Chaibasa",
        "Telco - Gurudwara"
    ]
},


        "Uttar Pradesh": {
            "Lucknow": [
                "Gomti Nagar SIP Abacus",
                "Alambagh SIP Abacus"
            ],
            "Noida": [
                "Sector 62 SIP Abacus",
                "Sector 18 SIP Abacus"
            ],
            "Varanasi": [
                "Bhelupur SIP Abacus"
            ]
        },

        "Bihar": {
            "Patna": [
                "Boring Road SIP Abacus",
                "Kankarbagh SIP Abacus"
            ],
            "Gaya": [
                "Civil Lines SIP Abacus"
            ]
        },
        "Rajasthan": {
            "Jaipur": [
                "Vaishali Nagar SIP Abacus",
                "Mansarovar SIP Abacus"
            ],
            "Udaipur": [
                "Hiran Magri SIP Abacus"
            ]
        },
        "Andaman & Nicobar Island": {
            "Port Blair": [
                "Garacharma",
            ],
            "South Andaman":[
                "School Line",
                "Wimberly Gunj"
            ],
            "Sri Vijaya Puram":[
                "Junglighat"
            ]
        },
        "Andhra Pradesh": {

            "Anantapur": [
                "Hindupur",
                "Kadiri"
            ],

            "Chittoor": [
                "Chittoor",
                "K T Road Tirupati"
            ],

            "Guntur": [
                "Ashok Nagar, Guntur",
                "Bhavanipuram",
                "Machavaram"
            ],

            "Mangalagiri": [
                "Camp Road - Mangalagiri"
            ],

            "Nellore": [
                "Childrenpark Road, Nellore"
            ],

            "Rajamahendravaram": [
                "Happy Street - Rajamahendravaram"
            ],

            "Vijayawada": [
                "Currency Nagar",
                "Kanuru",
                "Kothapeta",
                "Labbipet",
                "One Town Vijayawada"
            ]
        }
    };

    function reset(select, label) {
        select.innerHTML = `<option value="">${label}</option>`;
        select.disabled = true;
    }

    reset(districtSelect, "Select District");
    reset(centerSelect, "Select Center Location");

    // STATE CHANGE
    stateSelect.addEventListener("change", function () {
        reset(districtSelect, "Select District");
        reset(centerSelect, "Select Center Location");

        const districts = data[this.value];
        if (!districts) return;

        Object.keys(districts).forEach(district => {
            districtSelect.add(new Option(district, district));
        });

        districtSelect.disabled = false;
    });

    // DISTRICT CHANGE
    districtSelect.addEventListener("change", function () {
        reset(centerSelect, "Select Center Location");

        const centers = data[stateSelect.value]?.[this.value];
        if (!centers) return;

        centers.forEach(center => {
            centerSelect.add(new Option(center, center));
        });

        centerSelect.disabled = false;
    });

});
