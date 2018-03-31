<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of driver
 *
 * @author derrick.mungai
 */
class driver {
    //put your code here
    //I have put in my bot token here please don't get any ideas

    /**
     * @description send a message
     * @param $id
     * @param $text
     * @return mixed
     */
    public function sendmessage($id,$text){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot572620584:AAHOh9RVrlKn2bPZdSzXtljOxIt2Or5MOpc/sendMessage");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"chat_id=$id&text=$text");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        return $server_output;
    }

    /**
     * @description send a message with custom keyboard
     * @param $id
     * @param $text
     * @param $markup
     * @return mixed
     */
    
    public function send_custom_keyboard($id,$text,$markup){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot572620584:AAHOh9RVrlKn2bPZdSzXtljOxIt2Or5MOpc/sendMessage");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"chat_id=$id&text=$text&reply_markup=$markup");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        return $server_output;
    }

    /**
     * @param $make
     * @return array
     */

    public function makemodel($make){
        $data='[{"make":"Audi","model":"A3"},{"make":"Audi","model":"A4"},{"make":"Audi","model":"A5"},{"make":"Audi","model":"A6"},{"make":"Audi","model":"A7"},{"make":"Audi","model":"A8"},{"make":"Audi","model":"100(C4)"},{"make":"Audi","model":"Q5"},{"make":"Audi","model":"Q7"},{"make":"Audi","model":"Q3"},{"make":"Audi","model":"TT"},{"make":"BMW","model":"1 series"},{"make":"BMW","model":"M Series"},{"make":"BMW","model":"2 Series"},{"make":"BMW","model":"3 Series"},{"make":"BMW","model":"5 Series"},{"make":"BMW","model":"6 Series"},{"make":"BMW","model":"7 Series"},{"make":"BMW","model":"8 Series"},{"make":"BMW","model":"X1"},{"make":"BMW","model":"X3"},{"make":"BMW","model":"X4"},{"make":"BMW","model":"X5"},{"make":"BMW","model":"X6"},{"make":"BMW","model":"X7"},{"make":"BMW","model":"X8"},{"make":"BMW","model":"Z4"},{"make":"BMW","model":"Mini Hatch"},{"make":"BMW","model":"Z3"},{"make":"CAM","model":"Inyathi"},{"make":"Cherry","model":"Cherry Tiggo"},{"make":"Cherry","model":"Cherry QQ3"},{"make":"Cherry","model":"Cherry QQ4"},{"make":"Chevrolet","model":"Aveo"},{"make":"Chevrolet","model":"Captiva"},{"make":"Chevrolet","model":"Corsa"},{"make":"Chevrolet","model":"Colorado"},{"make":"Chevrolet","model":"Optra"},{"make":"Chevrolet","model":"Lacetti"},{"make":"Chevrolet","model":"Cruze"},{"make":"Chevrolet","model":"Matiz"},{"make":"Chevrolet","model":"Trailblazer"},{"make":"Citroen","model":"Relay"},{"make":"Citroen","model":"Berlingo"},{"make":"Citroen","model":"Xsara"},{"make":"Citroen","model":"Xantia"},{"make":"Dacia","model":"Duster"},{"make":"Daewoo","model":"Cielo"},{"make":"Daewoo","model":"Matiz"},{"make":"Daewoo","model":"Lanos"},{"make":"Daewoo","model":"Nubira"},{"make":"Daewoo","model":"Espero"},{"make":"Daewoo","model":"Leganza"},{"make":"Daihatsu","model":"Boon"},{"make":"Daihatsu","model":"Mira"},{"make":"Daihatsu","model":"Hijet"},{"make":"Daihatsu","model":"Terios"},{"make":"Daihatsu","model":"Terios"},{"make":"Daihatsu","model":"Terios"},{"make":"Daihatsu","model":"Terios"},{"make":"Daihatsu","model":"YRV"},{"make":"Daihatsu","model":"Rocky"},{"make":"Daihatsu","model":"Feroza"},{"make":"Dodge","model":"Nitro"},{"make":"Dodge","model":"Journey"},{"make":"Fiat","model":"Palio"},{"make":"Fiat","model":"Siena"},{"make":"Fiat","model":"Weekend"},{"make":"Fiat","model":"Ducato"},{"make":"Ford","model":"Bantam"},{"make":"Ford","model":"Ecosport"},{"make":"Ford","model":"Everest"},{"make":"Ford","model":"Escape"},{"make":"Ford","model":"Figo"},{"make":"Ford","model":"Focus"},{"make":"Ford","model":"Super Duty"},{"make":"Ford","model":"Kuga"},{"make":"Ford","model":"Mondeo"},{"make":"Ford","model":"Ranger T6"},{"make":"Ford","model":"Ranger"},{"make":"Ford","model":"Territory"},{"make":"Ford","model":"Transit"},{"make":"Ford","model":"Telstar"},{"make":"Great Wall","model":"Wingle"},{"make":"Great Wall","model":"Haval H5"},{"make":"Great Wall","model":"Haval H6"},{"make":"Great Wall","model":"Haval H7"},{"make":"Great Wall","model":"Haval H8"},{"make":"Honda","model":"Accord"},{"make":"Honda","model":"Accord plug-in hybrid"},{"make":"Honda","model":"Airwave"},{"make":"Honda","model":"Ballade"},{"make":"Honda","model":"brio"},{"make":"Honda","model":"civic"},{"make":"Honda","model":"Crossroad"},{"make":"Honda","model":"CR-V"},{"make":"Honda","model":"CR-Z"},{"make":"Honda","model":"Element"},{"make":"Honda","model":"FIT"},{"make":"Honda","model":"Freed"},{"make":"Honda","model":"HR-V"},{"make":"Honda","model":"Insight"},{"make":"Honda","model":"Jazz"},{"make":"Honda","model":"Life"},{"make":"Honda","model":"life pickup"},{"make":"Honda","model":"Life step van"},{"make":"Honda","model":"Mobilio"},{"make":"Honda","model":"Odyssey"},{"make":"Honda","model":"Partner"},{"make":"Honda","model":"Pilot"},{"make":"Honda","model":"Ridgeline"},{"make":"Honda","model":"Stepwgn"},{"make":"Honda","model":"Stream"},{"make":"Hummer","model":"H3"},{"make":"Hummer","model":"H2"},{"make":"Hummer","model":"H1"},{"make":"Hyundai","model":"Accent"},{"make":"Hyundai","model":"Atos"},{"make":"Hyundai","model":"Elantra"},{"make":"Hyundai","model":"H-1"},{"make":"Hyundai","model":"H-100 Van"},{"make":"Hyundai","model":"Santa Fe"},{"make":"Hyundai","model":"Tucson"},{"make":"Hyundai","model":"IX35"},{"make":"Hyundai","model":"Sonata"},{"make":"Hyundai","model":"Terracan"},{"make":"Hyundai","model":"Trajet"},{"make":"Jaguar","model":"S-Type"},{"make":"Jaguar","model":"X-Type"},{"make":"Jaguar","model":"F-Type"},{"make":"Jaguar","model":"XJ"},{"make":"Jaguar","model":"XK"},{"make":"Jaguar","model":"XF"},{"make":"Jeep","model":"Compass"},{"make":"Jeep","model":"Commander"},{"make":"Jeep","model":"Cherokee KK"},{"make":"Jeep","model":"Cherokee XJ"},{"make":"Jeep","model":"Cherokee KJ"},{"make":"Jeep","model":"Cherokee KL"},{"make":"Jeep","model":"Grand Cherokee ZJ"},{"make":"Jeep","model":"Grand Cherokee WJ"},{"make":"Jeep","model":"Grand Cherokee WK"},{"make":"Jeep","model":"Grand Cherokee WK2"},{"make":"Jeep","model":"Grand Cherokee WK3"},{"make":"Jeep","model":"Grand Cherokee WK4"},{"make":"Jeep","model":"Grand Cherokee WK5"},{"make":"Jeep","model":"Wrangler YJ"},{"make":"Jeep","model":"Wrangler TJ"},{"make":"Jeep","model":"Wrangler JK"},{"make":"KIA","model":"Cerato"},{"make":"KIA","model":"Rio"},{"make":"KIA","model":"Sorento"},{"make":"KIA","model":"Sportage"},{"make":"KIA","model":"Shuma"},{"make":"KIA","model":"Carens"},{"make":"KIA","model":"Picanto"},{"make":"KIA","model":"Carnival"},{"make":"KIA","model":"Sedona"},{"make":"KIA","model":"Soul"},{"make":"Landrover","model":"Defender"},{"make":"Landrover","model":"Discovery 1"},{"make":"Landrover","model":"discovery II"},{"make":"Landrover","model":"Discovery III"},{"make":"Landrover","model":"Discovery IV"},{"make":"Landrover","model":"Freelander"},{"make":"Landrover","model":"Range Rover"},{"make":"Landrover","model":"Range rover Evoque"},{"make":"Landrover","model":"RangeRover sport"},{"make":"Mazda","model":"Mazda6"},{"make":"Mazda","model":"Mazdaspeed6"},{"make":"Mazda","model":323},{"make":"Mazda","model":"Axela"},{"make":"Mazda","model":"Atenza"},{"make":"Mazda","model":"Bongo"},{"make":"Mazda","model":"Bongo Friendee"},{"make":"Mazda","model":"B Series"},{"make":"Mazda","model":"BT-50"},{"make":"Mazda","model":"Capella"},{"make":"Mazda","model":"CX-7"},{"make":"Mazda","model":"CX-9"},{"make":"Mazda","model":"CX-5"},{"make":"Mazda","model":"CX-3"},{"make":"Mazda","model":"Demio"},{"make":"Mazda","model":"Familia"},{"make":"Mazda","model":"MPV"},{"make":"Mazda","model":"Premacy"},{"make":"Mazda","model":"MX5"},{"make":"Mazda","model":"MX6"},{"make":"Mazda","model":"MX7"},{"make":"Mazda","model":"MX8"},{"make":"Mazda","model":"MX9"},{"make":"Mazda","model":"MX10"},{"make":"Mazda","model":"MX11"},{"make":"Mazda","model":"MX12"},{"make":"Mazda","model":"MX13"},{"make":"Mazda","model":"RX-8"},{"make":"Mazda","model":"Tribute"},{"make":"Mazda","model":"Verisa"},{"make":"Mercedes","model":"A Class"},{"make":"Mercedes","model":"B Class"},{"make":"Mercedes","model":"C Class"},{"make":"Mercedes","model":"CLC Class"},{"make":"Mercedes","model":"CL-Class"},{"make":"Mercedes","model":"CLK Class"},{"make":"Mercedes","model":"CLS-Class"},{"make":"Mercedes","model":"E-Class"},{"make":"Mercedes","model":"G-Class"},{"make":"Mercedes","model":"GL-Class"},{"make":"Mercedes","model":"M-Class"},{"make":"Mercedes","model":"S-Class"},{"make":"Mercedes","model":"SL-Class"},{"make":"Mercedes","model":"SLK-Class"},{"make":"Mercedes","model":"SLS AMG"},{"make":"Mercedes","model":"Sprinter"},{"make":"Mercedes","model":"Viano"},{"make":"Mercedes","model":"Vito"},{"make":"Mitsubishi","model":"Airtrek"},{"make":"Mitsubishi","model":"Carisma"},{"make":"Mitsubishi","model":"Cedia"},{"make":"Mitsubishi","model":"Challenger"},{"make":"Mitsubishi","model":"Chariot"},{"make":"Mitsubishi","model":"Colt"},{"make":"Mitsubishi","model":"Delica"},{"make":"Mitsubishi","model":"Diamante"},{"make":"Mitsubishi","model":"Dion"},{"make":"Mitsubishi","model":"Ek"},{"make":"Mitsubishi","model":"Galant"},{"make":"Mitsubishi","model":"Galant Fortis"},{"make":"Mitsubishi","model":"Grandis"},{"make":"Mitsubishi","model":"GTO"},{"make":"Mitsubishi","model":"L200"},{"make":"Mitsubishi","model":"L300"},{"make":"Mitsubishi","model":"Lancer"},{"make":"Mitsubishi","model":"Lancer Cargo"},{"make":"Mitsubishi","model":"Lancer Evolution"},{"make":"Mitsubishi","model":"Magna"},{"make":"Mitsubishi","model":"Minica"},{"make":"Mitsubishi","model":"Nativa"},{"make":"Mitsubishi","model":"Outlander"},{"make":"Mitsubishi","model":"Pajero"},{"make":"Mitsubishi","model":"Pajero Io"},{"make":"Mitsubishi","model":"Pajero Mini"},{"make":"Mitsubishi","model":"Pajero sport"},{"make":"Mitsubishi","model":"RVR"},{"make":"Mitsubishi","model":"V3000"},{"make":"Mitsubishi","model":"Verada"},{"make":"Nissan","model":"AD"},{"make":"Nissan","model":"Almera"},{"make":"Nissan","model":"Avenir"},{"make":"Nissan","model":"Sunny"},{"make":"Nissan","model":"Bluebird"},{"make":"Nissan","model":"Bluebird Sylphy"},{"make":"Nissan","model":"Caravan"},{"make":"Nissan","model":"Urvan"},{"make":"Nissan","model":"Civilan"},{"make":"Nissan","model":"Cefiro"},{"make":"Nissan","model":"Laurel"},{"make":"Nissan","model":"Cube"},{"make":"Nissan","model":"Dualis"},{"make":"Nissan","model":"Qashqai"},{"make":"Nissan","model":"Elgrand"},{"make":"Nissan","model":"Expert"},{"make":"Nissan","model":"Fairlady Z"},{"make":"Nissan","model":"Fuga"},{"make":"Nissan","model":"Hardbody"},{"make":"Nissan","model":"Liberty"},{"make":"Nissan","model":"Lafesta"},{"make":"Nissan","model":"March"},{"make":"Nissan","model":"Maxima"},{"make":"Nissan","model":"Mistral"},{"make":"Nissan","model":"Murano"},{"make":"Nissan","model":"Navara"},{"make":"Nissan","model":"Note"},{"make":"Nissan","model":"NP200"},{"make":"Nissan","model":"Pathfinder"},{"make":"Nissan","model":"Patrol"},{"make":"Nissan","model":"Pino"},{"make":"Nissan","model":"Prairie"},{"make":"Nissan","model":"Presea"},{"make":"Nissan","model":"Presage"},{"make":"Nissan","model":"Primera"},{"make":"Nissan","model":"Skyline"},{"make":"Nissan","model":"Sentra"},{"make":"Nissan","model":"Serena"},{"make":"Nissan","model":"Teana"},{"make":"Nissan","model":"Terrano II"},{"make":"Nissan","model":"Tiida"},{"make":"Nissan","model":"X-Trail"},{"make":"Nissan","model":"Wingroad"},{"make":"Opel","model":"Corsa"},{"make":"Opel","model":"Astra"},{"make":"Opel","model":"Kadette"},{"make":"Opel","model":"Zafira"},{"make":"Opel","model":"Vectra"},{"make":"Peugeot","model":"Boxer"},{"make":"Peugeot","model":206},{"make":"Peugeot","model":207},{"make":"Peugeot","model":305},{"make":"Peugeot","model":306},{"make":"Peugeot","model":307},{"make":"Peugeot","model":405},{"make":"Peugeot","model":406},{"make":"Peugeot","model":407},{"make":"Peugeot","model":504},{"make":"Peugeot","model":505},{"make":"Peugeot","model":607},{"make":"Peugeot","model":"Partner"},{"make":"Renault","model":"Fluence"},{"make":"Renault","model":"Koleos"},{"make":"Renault","model":"Kangoo"},{"make":"Renault","model":"Laguna"},{"make":"Renault","model":"Megane"},{"make":"Skoda","model":"Fabia"},{"make":"Skoda","model":"Octavia"},{"make":"Skoda","model":"Yeti"},{"make":"Subaru","model":"exiga"},{"make":"Subaru","model":"forester"},{"make":"Subaru","model":"Imprezza"},{"make":"Subaru","model":"XV"},{"make":"Subaru","model":"Legacy"},{"make":"Subaru","model":"Outback"},{"make":"Subaru","model":"pleo"},{"make":"Subaru","model":"Tribeca"},{"make":"Suzuki","model":"Aerio"},{"make":"Suzuki","model":"Carry"},{"make":"Suzuki","model":"Escudo"},{"make":"Suzuki","model":"Every"},{"make":"Suzuki","model":"Grand Vitara"},{"make":"Suzuki","model":"Jimny"},{"make":"Suzuki","model":"Kei"},{"make":"Suzuki","model":"Solio"},{"make":"Suzuki","model":"Swift"},{"make":"Suzuki","model":"SX4"},{"make":"Suzuki","model":"Wagon R"},{"make":"Suzuki","model":"Wagon R+"},{"make":"Toyota","model":"Allex"},{"make":"Toyota","model":"Allion"},{"make":"Toyota","model":"Alphard"},{"make":"Toyota","model":"Axio"},{"make":"Toyota","model":"Auris"},{"make":"Toyota","model":"Avanza"},{"make":"Toyota","model":"Avensis"},{"make":"Toyota","model":"Bb"},{"make":"Toyota","model":"Belta"},{"make":"Toyota","model":"Blade"},{"make":"Toyota","model":"Caldina"},{"make":"Toyota","model":"Cami"},{"make":"Toyota","model":"Camry"},{"make":"Toyota","model":"Carina"},{"make":"Toyota","model":"Celica"},{"make":"Toyota","model":"Ceres"},{"make":"Toyota","model":"Chaser"},{"make":"Toyota","model":"Condor"},{"make":"Toyota","model":"Corolla"},{"make":"Toyota","model":"Corona"},{"make":"Toyota","model":"Corona Coupe"},{"make":"Toyota","model":"Corona Mark II"},{"make":"Toyota","model":"Corsa"},{"make":"Toyota","model":"Cressida"},{"make":"Toyota","model":"Crown"},{"make":"Toyota","model":"Duet"},{"make":"Toyota","model":"Estima"},{"make":"Toyota","model":"Fortuner"},{"make":"Toyota","model":"Fielder"},{"make":"Toyota","model":"Fun Cargo"},{"make":"Toyota","model":"Gaia"},{"make":"Toyota","model":"Harrier"},{"make":"Toyota","model":"Hiace"},{"make":"Toyota","model":"Hilux"},{"make":"Toyota","model":"hilux surf"},{"make":"Toyota","model":"Innova"},{"make":"Toyota","model":"Ipsum"},{"make":"Toyota","model":"Isis"},{"make":"Toyota","model":"Ist"},{"make":"Toyota","model":"Kluger"},{"make":"Toyota","model":"Land Cruiser"},{"make":"Toyota","model":"Land Cruiser Prado"},{"make":"Toyota","model":"Lexus CT"},{"make":"Toyota","model":"Lexus ES"},{"make":"Toyota","model":"Lexus GS"},{"make":"Toyota","model":"Lexus GX"},{"make":"Toyota","model":"Lexus HS"},{"make":"Toyota","model":"Lexus IS"},{"make":"Toyota","model":"Lexus LFA"},{"make":"Toyota","model":"Lexus LS"},{"make":"Toyota","model":"Lexus LX"},{"make":"Toyota","model":"Lexus RX"},{"make":"Toyota","model":"Lexus SC"},{"make":"Toyota","model":"LiteAce"},{"make":"Toyota","model":"Marino"},{"make":"Toyota","model":"Mark II"},{"make":"Toyota","model":"Mark II Blit"},{"make":"Toyota","model":"Mark X"},{"make":"Toyota","model":"Mark X Zio"},{"make":"Toyota","model":"MR2"},{"make":"Toyota","model":"Noah"},{"make":"Toyota","model":"Opa"},{"make":"Toyota","model":"Passo"},{"make":"Toyota","model":"Platz"},{"make":"Toyota","model":"Porte"},{"make":"Toyota","model":"Premio"},{"make":"Toyota","model":"Prius"},{"make":"Toyota","model":"Probox"},{"make":"Toyota","model":"Ractis"},{"make":"Toyota","model":"Raum"},{"make":"Toyota","model":"RAV4"},{"make":"Toyota","model":"regiusace"},{"make":"Toyota","model":"Rumion"},{"make":"Toyota","model":"RunX"},{"make":"Toyota","model":"Rush"},{"make":"Toyota","model":"Scion FR-S"},{"make":"Toyota","model":"Scion IA"},{"make":"Toyota","model":"Scion IM"},{"make":"Toyota","model":"Scion IQ"},{"make":"Toyota","model":"Scion Tc"},{"make":"Toyota","model":"Scion Xa"},{"make":"Toyota","model":"Scion Xb"},{"make":"Toyota","model":"Scion XD"},{"make":"Toyota","model":"Sienta"},{"make":"Toyota","model":"Spacio"},{"make":"Toyota","model":"Sprinter"},{"make":"Toyota","model":"Succeed"},{"make":"Toyota","model":"TownAce"},{"make":"Toyota","model":"Vanguard"},{"make":"Toyota","model":"Verossa"},{"make":"Toyota","model":"Verso"},{"make":"Toyota","model":"Vios"},{"make":"Toyota","model":"Vista"},{"make":"Toyota","model":"Vitz"},{"make":"Toyota","model":"Voltz"},{"make":"Toyota","model":"Voxy"},{"make":"Toyota","model":"WiLL Cypha"},{"make":"Toyota","model":"WiLL Vi"},{"make":"Toyota","model":"WiLL VS"},{"make":"Toyota","model":"Wish"},{"make":"Toyota","model":"Yaris"},{"make":"Vauxhall","model":"Brava"},{"make":"Vauxhall","model":"Vectra"},{"make":"Vauxhall","model":"Vivaro"},{"make":"Volkswagen","model":"Amarok"},{"make":"Volkswagen","model":"Beetle"},{"make":"Volkswagen","model":"New beetle"},{"make":"Volkswagen","model":"Caddy"},{"make":"Volkswagen","model":"Combi"},{"make":"Volkswagen","model":"Citi Golf"},{"make":"Volkswagen","model":"Citi Golf"},{"make":"Volkswagen","model":"Citi Golf"},{"make":"Volkswagen","model":"Golf"},{"make":"Volkswagen","model":"Golf plus"},{"make":"Volkswagen","model":"Golf Variant"},{"make":"Volkswagen","model":"Jetta A1"},{"make":"Volkswagen","model":"Jetta A2"},{"make":"Volkswagen","model":"Jetta A3"},{"make":"Volkswagen","model":"Jetta A4"},{"make":"Volkswagen","model":"Jetta A5"},{"make":"Volkswagen","model":"Jetta A6"},{"make":"Volkswagen","model":"Touran"},{"make":"Volkswagen","model":"Multivan"},{"make":"Volkswagen","model":"Passat"},{"make":"Volkswagen","model":"Passat CC"},{"make":"Volkswagen","model":"Polo"},{"make":"Volkswagen","model":"Scirocco"},{"make":"Volkswagen","model":"Tiguan"},{"make":"Volkswagen","model":"Touareg"},{"make":"Volkswagen","model":"Transporter T5"},{"make":"Volkswagen","model":"Vento"},{"make":"Volvo","model":"200 Series"},{"make":"Volvo","model":740},{"make":"Volvo","model":760},{"make":"Volvo","model":780},{"make":"Volvo","model":940},{"make":"Volvo","model":960},{"make":"Volvo","model":960},{"make":"Volvo","model":"C30"},{"make":"Volvo","model":"C70"},{"make":"Volvo","model":"S40"},{"make":"Volvo","model":"S60"},{"make":"Volvo","model":"S80"},{"make":"Volvo","model":"V50"},{"make":"Volvo","model":"v60"},{"make":"Volvo","model":"V70"},{"make":"Volvo","model":"XC60"},{"make":"Volvo","model":"XC70"},{"make":"Volvo","model":"XC90"},{"make":"Volvo","model":"FH"},{"make":"Volvo","model":"FM"}]';
        $data= json_decode($data,true);
        foreach ($data as $row){
            if ($row["make"]==$make){
                $model=array($row["model"]);
                $arr[]=$model;
            }
        }
        return $arr;
    }
}