<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$data = [
			[ 'code' => 'AD','code3' => 'AND','num_code' => '20','phone_code' => '376','name' => 'Andorra' ],
			[ 'code' => 'AE','code3' => 'ARE','num_code' => '784','phone_code' => '971','name' => 'United Arab Emirates' ],
			[ 'code' => 'AF','code3' => 'AFG','num_code' => '4','phone_code' => '93','name' => 'Afghanistan' ],
			[ 'code' => 'AG','code3' => 'ATG','num_code' => '28','phone_code' => '1268','name' => 'Antigua and Barbuda' ],
			[ 'code' => 'AI','code3' => 'AIA','num_code' => '660','phone_code' => '1264','name' => 'Anguilla' ],
			[ 'code' => 'AL','code3' => 'ALB','num_code' => '8','phone_code' => '355','name' => 'Albania' ],
			[ 'code' => 'AM','code3' => 'ARM','num_code' => '51','phone_code' => '374','name' => 'Armenia' ],
			[ 'code' => 'AO','code3' => 'AGO','num_code' => '24','phone_code' => '244','name' => 'Angola' ],
			[ 'code' => 'AQ','code3' => NULL,'num_code' => NULL,'phone_code' => '0','name' => 'Antarctica' ],
			[ 'code' => 'AR','code3' => 'ARG','num_code' => '32','phone_code' => '54','name' => 'Argentina' ],
			[ 'code' => 'AS','code3' => 'ASM','num_code' => '16','phone_code' => '1684','name' => 'American Samoa' ],
			[ 'code' => 'AT','code3' => 'AUT','num_code' => '40','phone_code' => '43','name' => 'Austria' ],
			[ 'code' => 'AU','code3' => 'AUS','num_code' => '36','phone_code' => '61','name' => 'Australia' ],
			[ 'code' => 'AW','code3' => 'ABW','num_code' => '533','phone_code' => '297','name' => 'Aruba' ],
			[ 'code' => 'AX','code3' => 'ALA','num_code' => '248','phone_code' => '358','name' => 'Aland Islands' ],
			[ 'code' => 'AZ','code3' => 'AZE','num_code' => '31','phone_code' => '994','name' => 'Azerbaijan' ],
			[ 'code' => 'BA','code3' => 'BIH','num_code' => '70','phone_code' => '387','name' => 'Bosnia and Herzegovina' ],
			[ 'code' => 'BB','code3' => 'BRB','num_code' => '52','phone_code' => '1246','name' => 'Barbados' ],
			[ 'code' => 'BD','code3' => 'BGD','num_code' => '50','phone_code' => '880','name' => 'Bangladesh' ],
			[ 'code' => 'BE','code3' => 'BEL','num_code' => '56','phone_code' => '32','name' => 'Belgium' ],
			[ 'code' => 'BF','code3' => 'BFA','num_code' => '854','phone_code' => '226','name' => 'Burkina Faso' ],
			[ 'code' => 'BG','code3' => 'BGR','num_code' => '100','phone_code' => '359','name' => 'Bulgaria' ],
			[ 'code' => 'BH','code3' => 'BHR','num_code' => '48','phone_code' => '973','name' => 'Bahrain' ],
			[ 'code' => 'BI','code3' => 'BDI','num_code' => '108','phone_code' => '257','name' => 'Burundi' ],
			[ 'code' => 'BJ','code3' => 'BEN','num_code' => '204','phone_code' => '229','name' => 'Benin' ],
			[ 'code' => 'BL','code3' => 'BLM','num_code' => '652','phone_code' => '590','name' => 'Saint Barthelemy' ],
			[ 'code' => 'BM','code3' => 'BMU','num_code' => '60','phone_code' => '1441','name' => 'Bermuda' ],
			[ 'code' => 'BN','code3' => 'BRN','num_code' => '96','phone_code' => '673','name' => 'Brunei Darussalam' ],
			[ 'code' => 'BO','code3' => 'BOL','num_code' => '68','phone_code' => '591','name' => 'Bolivia' ],
			[ 'code' => 'BQ','code3' => 'BES','num_code' => '535','phone_code' => '599','name' => 'Bonaire' ],
			[ 'code' => 'BR','code3' => 'BRA','num_code' => '76','phone_code' => '55','name' => 'Brazil' ],
			[ 'code' => 'BS','code3' => 'BHS','num_code' => '44','phone_code' => '1242','name' => 'Bahamas' ],
			[ 'code' => 'BT','code3' => 'BTN','num_code' => '64','phone_code' => '975','name' => 'Bhutan' ],
			[ 'code' => 'BV','code3' => NULL,'num_code' => NULL,'phone_code' => '0','name' => 'Bouvet Island' ],
			[ 'code' => 'BW','code3' => 'BWA','num_code' => '72','phone_code' => '267','name' => 'Botswana' ],
			[ 'code' => 'BY','code3' => 'BLR','num_code' => '112','phone_code' => '375','name' => 'Belarus' ],
			[ 'code' => 'BZ','code3' => 'BLZ','num_code' => '84','phone_code' => '501','name' => 'Belize' ],
			[ 'code' => 'CA','code3' => 'CAN','num_code' => '124','phone_code' => '1','name' => 'Canada' ],
			[ 'code' => 'CC','code3' => NULL,'num_code' => NULL,'phone_code' => '672','name' => 'Cocos (Keeling) Islands' ],
			[ 'code' => 'CD','code3' => 'COD','num_code' => '180','phone_code' => '242','name' => 'Congo, the Democratic Republic of the' ],
			[ 'code' => 'CF','code3' => 'CAF','num_code' => '140','phone_code' => '236','name' => 'Central African Republic' ],
			[ 'code' => 'CG','code3' => 'COG','num_code' => '178','phone_code' => '242','name' => 'Congo' ],
			[ 'code' => 'CH','code3' => 'CHE','num_code' => '756','phone_code' => '41','name' => 'Switzerland' ],
			[ 'code' => 'CI','code3' => 'CIV','num_code' => '384','phone_code' => '225','name' => 'Cote D\'Ivoire' ],
			[ 'code' => 'CK','code3' => 'COK','num_code' => '184','phone_code' => '682','name' => 'Cook Islands' ],
			[ 'code' => 'CL','code3' => 'CHL','num_code' => '152','phone_code' => '56','name' => 'Chile' ],
			[ 'code' => 'CM','code3' => 'CMR','num_code' => '120','phone_code' => '237','name' => 'Cameroon' ],
			[ 'code' => 'CN','code3' => 'CHN','num_code' => '156','phone_code' => '86','name' => 'China' ],
			[ 'code' => 'CO','code3' => 'COL','num_code' => '170','phone_code' => '57','name' => 'Colombia' ],
			[ 'code' => 'CR','code3' => 'CRI','num_code' => '188','phone_code' => '506','name' => 'Costa Rica' ],
			[ 'code' => 'CU','code3' => 'CUB','num_code' => '192','phone_code' => '53','name' => 'Cuba' ],
			[ 'code' => 'CV','code3' => 'CPV','num_code' => '132','phone_code' => '238','name' => 'Cape Verde' ],
			[ 'code' => 'CW','code3' => 'CUW','num_code' => '531','phone_code' => '599','name' => 'Curacao' ],
			[ 'code' => 'CX','code3' => NULL,'num_code' => NULL,'phone_code' => '61','name' => 'Christmas Island' ],
			[ 'code' => 'CY','code3' => 'CYP','num_code' => '196','phone_code' => '357','name' => 'Cyprus' ],
			[ 'code' => 'CZ','code3' => 'CZE','num_code' => '203','phone_code' => '420','name' => 'Czech Republic' ],
			[ 'code' => 'DE','code3' => 'DEU','num_code' => '276','phone_code' => '49','name' => 'Germany' ],
			[ 'code' => 'DJ','code3' => 'DJI','num_code' => '262','phone_code' => '253','name' => 'Djibouti' ],
			[ 'code' => 'DK','code3' => 'DNK','num_code' => '208','phone_code' => '45','name' => 'Denmark' ],
			[ 'code' => 'DM','code3' => 'DMA','num_code' => '212','phone_code' => '1767','name' => 'Dominica' ],
			[ 'code' => 'DO','code3' => 'DOM','num_code' => '214','phone_code' => '1809','name' => 'Dominican Republic' ],
			[ 'code' => 'DZ','code3' => 'DZA','num_code' => '12','phone_code' => '213','name' => 'Algeria' ],
			[ 'code' => 'EC','code3' => 'ECU','num_code' => '218','phone_code' => '593','name' => 'Ecuador' ],
			[ 'code' => 'EE','code3' => 'EST','num_code' => '233','phone_code' => '372','name' => 'Estonia' ],
			[ 'code' => 'EG','code3' => 'EGY','num_code' => '818','phone_code' => '20','name' => 'Egypt' ],
			[ 'code' => 'EH','code3' => 'ESH','num_code' => '732','phone_code' => '212','name' => 'Western Sahara' ],
			[ 'code' => 'ER','code3' => 'ERI','num_code' => '232','phone_code' => '291','name' => 'Eritrea' ],
			[ 'code' => 'ES','code3' => 'ESP','num_code' => '724','phone_code' => '34','name' => 'Spain' ],
			[ 'code' => 'ET','code3' => 'ETH','num_code' => '231','phone_code' => '251','name' => 'Ethiopia' ],
			[ 'code' => 'FI','code3' => 'FIN','num_code' => '246','phone_code' => '358','name' => 'Finland' ],
			[ 'code' => 'FJ','code3' => 'FJI','num_code' => '242','phone_code' => '679','name' => 'Fiji' ],
			[ 'code' => 'FK','code3' => 'FLK','num_code' => '238','phone_code' => '500','name' => 'Falkland Islands (Malvinas)' ],
			[ 'code' => 'FM','code3' => 'FSM','num_code' => '583','phone_code' => '691','name' => 'Micronesia, Federated States of' ],
			[ 'code' => 'FO','code3' => 'FRO','num_code' => '234','phone_code' => '298','name' => 'Faroe Islands' ],
			[ 'code' => 'FR','code3' => 'FRA','num_code' => '250','phone_code' => '33','name' => 'France' ],
			[ 'code' => 'GA','code3' => 'GAB','num_code' => '266','phone_code' => '241','name' => 'Gabon' ],
			[ 'code' => 'GB','code3' => 'GBR','num_code' => '826','phone_code' => '44','name' => 'United Kingdom' ],
			[ 'code' => 'GD','code3' => 'GRD','num_code' => '308','phone_code' => '1473','name' => 'Grenada' ],
			[ 'code' => 'GE','code3' => 'GEO','num_code' => '268','phone_code' => '995','name' => 'Georgia' ],
			[ 'code' => 'GF','code3' => 'GUF','num_code' => '254','phone_code' => '594','name' => 'French Guiana' ],
			[ 'code' => 'GG','code3' => 'GGY','num_code' => '831','phone_code' => '44','name' => 'Guernsey' ],
			[ 'code' => 'GH','code3' => 'GHA','num_code' => '288','phone_code' => '233','name' => 'Ghana' ],
			[ 'code' => 'GI','code3' => 'GIB','num_code' => '292','phone_code' => '350','name' => 'Gibraltar' ],
			[ 'code' => 'GL','code3' => 'GRL','num_code' => '304','phone_code' => '299','name' => 'Greenland' ],
			[ 'code' => 'GM','code3' => 'GMB','num_code' => '270','phone_code' => '220','name' => 'Gambia' ],
			[ 'code' => 'GN','code3' => 'GIN','num_code' => '324','phone_code' => '224','name' => 'Guinea' ],
			[ 'code' => 'GP','code3' => 'GLP','num_code' => '312','phone_code' => '590','name' => 'Guadeloupe' ],
			[ 'code' => 'GQ','code3' => 'GNQ','num_code' => '226','phone_code' => '240','name' => 'Equatorial Guinea' ],
			[ 'code' => 'GR','code3' => 'GRC','num_code' => '300','phone_code' => '30','name' => 'Greece' ],
			[ 'code' => 'GS','code3' => NULL,'num_code' => NULL,'phone_code' => '0','name' => 'South Georgia and the South Sandwich Islands' ],
			[ 'code' => 'GT','code3' => 'GTM','num_code' => '320','phone_code' => '502','name' => 'Guatemala' ],
			[ 'code' => 'GU','code3' => 'GUM','num_code' => '316','phone_code' => '1671','name' => 'Guam' ],
			[ 'code' => 'GW','code3' => 'GNB','num_code' => '624','phone_code' => '245','name' => 'Guinea-Bissau' ],
			[ 'code' => 'GY','code3' => 'GUY','num_code' => '328','phone_code' => '592','name' => 'Guyana' ],
			[ 'code' => 'HK','code3' => 'HKG','num_code' => '344','phone_code' => '852','name' => 'Hong Kong' ],
			[ 'code' => 'HM','code3' => NULL,'num_code' => NULL,'phone_code' => '0','name' => 'Heard Island and Mcdonald Islands' ],
			[ 'code' => 'HN','code3' => 'HND','num_code' => '340','phone_code' => '504','name' => 'Honduras' ],
			[ 'code' => 'HR','code3' => 'HRV','num_code' => '191','phone_code' => '385','name' => 'Croatia' ],
			[ 'code' => 'HT','code3' => 'HTI','num_code' => '332','phone_code' => '509','name' => 'Haiti' ],
			[ 'code' => 'HU','code3' => 'HUN','num_code' => '348','phone_code' => '36','name' => 'Hungary' ],
			[ 'code' => 'ID','code3' => 'IDN','num_code' => '360','phone_code' => '62','name' => 'Indonesia' ],
			[ 'code' => 'IE','code3' => 'IRL','num_code' => '372','phone_code' => '353','name' => 'Ireland' ],
			[ 'code' => 'IL','code3' => 'ISR','num_code' => '376','phone_code' => '972','name' => 'Israel' ],
			[ 'code' => 'IM','code3' => 'IMN','num_code' => '833','phone_code' => '44','name' => 'Isle of Man' ],
			[ 'code' => 'IN','code3' => 'IND','num_code' => '356','phone_code' => '91','name' => 'India' ],
			[ 'code' => 'IO','code3' => NULL,'num_code' => NULL,'phone_code' => '246','name' => 'British Indian Ocean Territory' ],
			[ 'code' => 'IQ','code3' => 'IRQ','num_code' => '368','phone_code' => '964','name' => 'Iraq' ],
			[ 'code' => 'IR','code3' => 'IRN','num_code' => '364','phone_code' => '98','name' => 'Iran, Islamic Republic of' ],
			[ 'code' => 'IS','code3' => 'ISL','num_code' => '352','phone_code' => '354','name' => 'Iceland' ],
			[ 'code' => 'IT','code3' => 'ITA','num_code' => '380','phone_code' => '39','name' => 'Italy' ],
			[ 'code' => 'JE','code3' => 'JEY','num_code' => '832','phone_code' => '44','name' => 'Jersey' ],
			[ 'code' => 'JM','code3' => 'JAM','num_code' => '388','phone_code' => '1876','name' => 'Jamaica' ],
			[ 'code' => 'JO','code3' => 'JOR','num_code' => '400','phone_code' => '962','name' => 'Jordan' ],
			[ 'code' => 'JP','code3' => 'JPN','num_code' => '392','phone_code' => '81','name' => 'Japan' ],
			[ 'code' => 'KE','code3' => 'KEN','num_code' => '404','phone_code' => '254','name' => 'Kenya' ],
			[ 'code' => 'KG','code3' => 'KGZ','num_code' => '417','phone_code' => '996','name' => 'Kyrgyzstan' ],
			[ 'code' => 'KH','code3' => 'KHM','num_code' => '116','phone_code' => '855','name' => 'Cambodia' ],
			[ 'code' => 'KI','code3' => 'KIR','num_code' => '296','phone_code' => '686','name' => 'Kiribati' ],
			[ 'code' => 'KM','code3' => 'COM','num_code' => '174','phone_code' => '269','name' => 'Comoros' ],
			[ 'code' => 'KN','code3' => 'KNA','num_code' => '659','phone_code' => '1869','name' => 'Saint Kitts and Nevis' ],
			[ 'code' => 'KP','code3' => 'PRK','num_code' => '408','phone_code' => '850','name' => 'Korea, Democratic People\'s Republic of' ],
			[ 'code' => 'KR','code3' => 'KOR','num_code' => '410','phone_code' => '82','name' => 'Korea, Republic of' ],
			[ 'code' => 'KW','code3' => 'KWT','num_code' => '414','phone_code' => '965','name' => 'Kuwait' ],
			[ 'code' => 'KY','code3' => 'CYM','num_code' => '136','phone_code' => '1345','name' => 'Cayman Islands' ],
			[ 'code' => 'KZ','code3' => 'KAZ','num_code' => '398','phone_code' => '7','name' => 'Kazakhstan' ],
			[ 'code' => 'LA','code3' => 'LAO','num_code' => '418','phone_code' => '856','name' => 'Lao People\'s Democratic Republic' ],
			[ 'code' => 'LB','code3' => 'LBN','num_code' => '422','phone_code' => '961','name' => 'Lebanon' ],
			[ 'code' => 'LC','code3' => 'LCA','num_code' => '662','phone_code' => '1758','name' => 'Saint Lucia' ],
			[ 'code' => 'LI','code3' => 'LIE','num_code' => '438','phone_code' => '423','name' => 'Liechtenstein' ],
			[ 'code' => 'LK','code3' => 'LKA','num_code' => '144','phone_code' => '94','name' => 'Sri Lanka' ],
			[ 'code' => 'LR','code3' => 'LBR','num_code' => '430','phone_code' => '231','name' => 'Liberia' ],
			[ 'code' => 'LS','code3' => 'LSO','num_code' => '426','phone_code' => '266','name' => 'Lesotho' ],
			[ 'code' => 'LT','code3' => 'LTU','num_code' => '440','phone_code' => '370','name' => 'Lithuania' ],
			[ 'code' => 'LU','code3' => 'LUX','num_code' => '442','phone_code' => '352','name' => 'Luxembourg' ],
			[ 'code' => 'LV','code3' => 'LVA','num_code' => '428','phone_code' => '371','name' => 'Latvia' ],
			[ 'code' => 'LY','code3' => 'LBY','num_code' => '434','phone_code' => '218','name' => 'Libya' ],
			[ 'code' => 'MA','code3' => 'MAR','num_code' => '504','phone_code' => '212','name' => 'Morocco' ],
			[ 'code' => 'MC','code3' => 'MCO','num_code' => '492','phone_code' => '377','name' => 'Monaco' ],
			[ 'code' => 'MD','code3' => 'MDA','num_code' => '498','phone_code' => '373','name' => 'Moldova, Republic of' ],
			[ 'code' => 'ME','code3' => 'MNE','num_code' => '499','phone_code' => '382','name' => 'Montenegro' ],
			[ 'code' => 'MF','code3' => 'MAF','num_code' => '663','phone_code' => '590','name' => 'Saint Martin' ],
			[ 'code' => 'MG','code3' => 'MDG','num_code' => '450','phone_code' => '261','name' => 'Madagascar' ],
			[ 'code' => 'MH','code3' => 'MHL','num_code' => '584','phone_code' => '692','name' => 'Marshall Islands' ],
			[ 'code' => 'MK','code3' => 'MKD','num_code' => '807','phone_code' => '389','name' => 'Macedonia, the Former Yugoslav Republic of' ],
			[ 'code' => 'ML','code3' => 'MLI','num_code' => '466','phone_code' => '223','name' => 'Mali' ],
			[ 'code' => 'MM','code3' => 'MMR','num_code' => '104','phone_code' => '95','name' => 'Myanmar' ],
			[ 'code' => 'MN','code3' => 'MNG','num_code' => '496','phone_code' => '976','name' => 'Mongolia' ],
			[ 'code' => 'MO','code3' => 'MAC','num_code' => '446','phone_code' => '853','name' => 'Macao' ],
			[ 'code' => 'MP','code3' => 'MNP','num_code' => '580','phone_code' => '1670','name' => 'Northern Mariana Islands' ],
			[ 'code' => 'MQ','code3' => 'MTQ','num_code' => '474','phone_code' => '596','name' => 'Martinique' ],
			[ 'code' => 'MR','code3' => 'MRT','num_code' => '478','phone_code' => '222','name' => 'Mauritania' ],
			[ 'code' => 'MS','code3' => 'MSR','num_code' => '500','phone_code' => '1664','name' => 'Montserrat' ],
			[ 'code' => 'MT','code3' => 'MLT','num_code' => '470','phone_code' => '356','name' => 'Malta' ],
			[ 'code' => 'MU','code3' => 'MUS','num_code' => '480','phone_code' => '230','name' => 'Mauritius' ],
			[ 'code' => 'MV','code3' => 'MDV','num_code' => '462','phone_code' => '960','name' => 'Maldives' ],
			[ 'code' => 'MW','code3' => 'MWI','num_code' => '454','phone_code' => '265','name' => 'Malawi' ],
			[ 'code' => 'MX','code3' => 'MEX','num_code' => '484','phone_code' => '52','name' => 'Mexico' ],
			[ 'code' => 'MY','code3' => 'MYS','num_code' => '458','phone_code' => '60','name' => 'Malaysia' ],
			[ 'code' => 'MZ','code3' => 'MOZ','num_code' => '508','phone_code' => '258','name' => 'Mozambique' ],
			[ 'code' => 'NA','code3' => 'NAM','num_code' => '516','phone_code' => '264','name' => 'Namibia' ],
			[ 'code' => 'NC','code3' => 'NCL','num_code' => '540','phone_code' => '687','name' => 'New Caledonia' ],
			[ 'code' => 'NE','code3' => 'NER','num_code' => '562','phone_code' => '227','name' => 'Niger' ],
			[ 'code' => 'NF','code3' => 'NFK','num_code' => '574','phone_code' => '672','name' => 'Norfolk Island' ],
			[ 'code' => 'NG','code3' => 'NGA','num_code' => '566','phone_code' => '234','name' => 'Nigeria' ],
			[ 'code' => 'NI','code3' => 'NIC','num_code' => '558','phone_code' => '505','name' => 'Nicaragua' ],
			[ 'code' => 'NL','code3' => 'NLD','num_code' => '528','phone_code' => '31','name' => 'Netherlands' ],
			[ 'code' => 'NO','code3' => 'NOR','num_code' => '578','phone_code' => '47','name' => 'Norway' ],
			[ 'code' => 'NP','code3' => 'NPL','num_code' => '524','phone_code' => '977','name' => 'Nepal' ],
			[ 'code' => 'NR','code3' => 'NRU','num_code' => '520','phone_code' => '674','name' => 'Nauru' ],
			[ 'code' => 'NU','code3' => 'NIU','num_code' => '570','phone_code' => '683','name' => 'Niue' ],
			[ 'code' => 'NZ','code3' => 'NZL','num_code' => '554','phone_code' => '64','name' => 'New Zealand' ],
			[ 'code' => 'OM','code3' => 'OMN','num_code' => '512','phone_code' => '968','name' => 'Oman' ],
			[ 'code' => 'PA','code3' => 'PAN','num_code' => '591','phone_code' => '507','name' => 'Panama' ],
			[ 'code' => 'PE','code3' => 'PER','num_code' => '604','phone_code' => '51','name' => 'Peru' ],
			[ 'code' => 'PF','code3' => 'PYF','num_code' => '258','phone_code' => '689','name' => 'French Polynesia' ],
			[ 'code' => 'PG','code3' => 'PNG','num_code' => '598','phone_code' => '675','name' => 'Papua New Guinea' ],
			[ 'code' => 'PH','code3' => 'PHL','num_code' => '608','phone_code' => '63','name' => 'Philippines' ],
			[ 'code' => 'PK','code3' => 'PAK','num_code' => '586','phone_code' => '92','name' => 'Pakistan' ],
			[ 'code' => 'PL','code3' => 'POL','num_code' => '616','phone_code' => '48','name' => 'Poland' ],
			[ 'code' => 'PM','code3' => 'SPM','num_code' => '666','phone_code' => '508','name' => 'Saint Pierre and Miquelon' ],
			[ 'code' => 'PN','code3' => 'PCN','num_code' => '612','phone_code' => '0','name' => 'Pitcairn' ],
			[ 'code' => 'PR','code3' => 'PRI','num_code' => '630','phone_code' => '1787','name' => 'Puerto Rico' ],
			[ 'code' => 'PS','code3' => NULL,'num_code' => NULL,'phone_code' => '970','name' => 'Palestinian Territory, Occupied' ],
			[ 'code' => 'PT','code3' => 'PRT','num_code' => '620','phone_code' => '351','name' => 'Portugal' ],
			[ 'code' => 'PW','code3' => 'PLW','num_code' => '585','phone_code' => '680','name' => 'Palau' ],
			[ 'code' => 'PY','code3' => 'PRY','num_code' => '600','phone_code' => '595','name' => 'Paraguay' ],
			[ 'code' => 'QA','code3' => 'QAT','num_code' => '634','phone_code' => '974','name' => 'Qatar' ],
			[ 'code' => 'RE','code3' => 'REU','num_code' => '638','phone_code' => '262','name' => 'Reunion' ],
			[ 'code' => 'RO','code3' => 'ROM','num_code' => '642','phone_code' => '40','name' => 'Romania' ],
			[ 'code' => 'RS','code3' => 'SRB','num_code' => '688','phone_code' => '381','name' => 'Serbia' ],
			[ 'code' => 'RU','code3' => 'RUS','num_code' => '643','phone_code' => '70','name' => 'Russian Federation' ],
			[ 'code' => 'RW','code3' => 'RWA','num_code' => '646','phone_code' => '250','name' => 'Rwanda' ],
			[ 'code' => 'SA','code3' => 'SAU','num_code' => '682','phone_code' => '966','name' => 'Saudi Arabia' ],
			[ 'code' => 'SB','code3' => 'SLB','num_code' => '90','phone_code' => '677','name' => 'Solomon Islands' ],
			[ 'code' => 'SC','code3' => 'SYC','num_code' => '690','phone_code' => '248','name' => 'Seychelles' ],
			[ 'code' => 'SD','code3' => 'SDN','num_code' => '736','phone_code' => '249','name' => 'Sudan' ],
			[ 'code' => 'SE','code3' => 'SWE','num_code' => '752','phone_code' => '46','name' => 'Sweden' ],
			[ 'code' => 'SG','code3' => 'SGP','num_code' => '702','phone_code' => '65','name' => 'Singapore' ],
			[ 'code' => 'SH','code3' => 'SHN','num_code' => '654','phone_code' => '290','name' => 'Saint Helena' ],
			[ 'code' => 'SI','code3' => 'SVN','num_code' => '705','phone_code' => '386','name' => 'Slovenia' ],
			[ 'code' => 'SJ','code3' => 'SJM','num_code' => '744','phone_code' => '47','name' => 'Svalbard and Jan Mayen' ],
			[ 'code' => 'SK','code3' => 'SVK','num_code' => '703','phone_code' => '421','name' => 'Slovakia' ],
			[ 'code' => 'SL','code3' => 'SLE','num_code' => '694','phone_code' => '232','name' => 'Sierra Leone' ],
			[ 'code' => 'SM','code3' => 'SMR','num_code' => '674','phone_code' => '378','name' => 'San Marino' ],
			[ 'code' => 'SN','code3' => 'SEN','num_code' => '686','phone_code' => '221','name' => 'Senegal' ],
			[ 'code' => 'SO','code3' => 'SOM','num_code' => '706','phone_code' => '252','name' => 'Somalia' ],
			[ 'code' => 'SR','code3' => 'SUR','num_code' => '740','phone_code' => '597','name' => 'Suriname' ],
			[ 'code' => 'SS','code3' => 'SSD','num_code' => '728','phone_code' => '211','name' => 'South Sudan' ],
			[ 'code' => 'ST','code3' => 'STP','num_code' => '678','phone_code' => '239','name' => 'Sao Tome and Principe' ],
			[ 'code' => 'SV','code3' => 'SLV','num_code' => '222','phone_code' => '503','name' => 'El Salvador' ],
			[ 'code' => 'SX','code3' => 'SXM','num_code' => '534','phone_code' => '1','name' => 'Sint Maarten' ],
			[ 'code' => 'SY','code3' => 'SYR','num_code' => '760','phone_code' => '963','name' => 'Syrian Arab Republic' ],
			[ 'code' => 'SZ','code3' => 'SWZ','num_code' => '748','phone_code' => '268','name' => 'Swaziland' ],
			[ 'code' => 'TC','code3' => 'TCA','num_code' => '796','phone_code' => '1649','name' => 'Turks and Caicos Islands' ],
			[ 'code' => 'TD','code3' => 'TCD','num_code' => '148','phone_code' => '235','name' => 'Chad' ],
			[ 'code' => 'TF','code3' => NULL,'num_code' => NULL,'phone_code' => '0','name' => 'French Southern Territories' ],
			[ 'code' => 'TG','code3' => 'TGO','num_code' => '768','phone_code' => '228','name' => 'Togo' ],
			[ 'code' => 'TH','code3' => 'THA','num_code' => '764','phone_code' => '66','name' => 'Thailand' ],
			[ 'code' => 'TJ','code3' => 'TJK','num_code' => '762','phone_code' => '992','name' => 'Tajikistan' ],
			[ 'code' => 'TK','code3' => 'TKL','num_code' => '772','phone_code' => '690','name' => 'Tokelau' ],
			[ 'code' => 'TL','code3' => NULL,'num_code' => NULL,'phone_code' => '670','name' => 'East Timor (Timor-Leste)' ],
			[ 'code' => 'TM','code3' => 'TKM','num_code' => '795','phone_code' => '7370','name' => 'Turkmenistan' ],
			[ 'code' => 'TN','code3' => 'TUN','num_code' => '788','phone_code' => '216','name' => 'Tunisia' ],
			[ 'code' => 'TO','code3' => 'TON','num_code' => '776','phone_code' => '676','name' => 'Tonga' ],
			[ 'code' => 'TR','code3' => 'TUR','num_code' => '792','phone_code' => '90','name' => 'Turkey' ],
			[ 'code' => 'TT','code3' => 'TTO','num_code' => '780','phone_code' => '1868','name' => 'Trinidad and Tobago' ],
			[ 'code' => 'TV','code3' => 'TUV','num_code' => '798','phone_code' => '688','name' => 'Tuvalu' ],
			[ 'code' => 'TW','code3' => 'TWN','num_code' => '158','phone_code' => '886','name' => 'Taiwan, Province of China' ],
			[ 'code' => 'TZ','code3' => 'TZA','num_code' => '834','phone_code' => '255','name' => 'Tanzania' ],
			[ 'code' => 'UA','code3' => 'UKR','num_code' => '804','phone_code' => '380','name' => 'Ukraine' ],
			[ 'code' => 'UG','code3' => 'UGA','num_code' => '800','phone_code' => '256','name' => 'Uganda' ],
			[ 'code' => 'UM','code3' => NULL,'num_code' => NULL,'phone_code' => '1','name' => 'United States Minor Outlying Islands' ],
			[ 'code' => 'US','code3' => 'USA','num_code' => '840','phone_code' => '1','name' => 'United States' ],
			[ 'code' => 'UY','code3' => 'URY','num_code' => '858','phone_code' => '598','name' => 'Uruguay' ],
			[ 'code' => 'UZ','code3' => 'UZB','num_code' => '860','phone_code' => '998','name' => 'Uzbekistan' ],
			[ 'code' => 'VA','code3' => 'VAT','num_code' => '336','phone_code' => '39','name' => 'Vatican City State (Holy See)' ],
			[ 'code' => 'VC','code3' => 'VCT','num_code' => '670','phone_code' => '1784','name' => 'Saint Vincent and the Grenadines' ],
			[ 'code' => 'VE','code3' => 'VEN','num_code' => '862','phone_code' => '58','name' => 'Venezuela' ],
			[ 'code' => 'VG','code3' => 'VGB','num_code' => '92','phone_code' => '1284','name' => 'Virgin Islands (British)' ],
			[ 'code' => 'VI','code3' => 'VIR','num_code' => '850','phone_code' => '1340','name' => 'Virgin Islands (US)' ],
			[ 'code' => 'VN','code3' => 'VNM','num_code' => '704','phone_code' => '84','name' => 'Viet Nam' ],
			[ 'code' => 'VU','code3' => 'VUT','num_code' => '548','phone_code' => '678','name' => 'Vanuatu' ],
			[ 'code' => 'WF','code3' => 'WLF','num_code' => '876','phone_code' => '681','name' => 'Wallis and Futuna' ],
			[ 'code' => 'WS','code3' => 'WSM','num_code' => '882','phone_code' => '684','name' => 'Samoa' ],
			[ 'code' => 'XK','code3' => '---','num_code' => '0','phone_code' => '381','name' => 'Kosovo' ],
			[ 'code' => 'YE','code3' => 'YEM','num_code' => '887','phone_code' => '967','name' => 'Yemen' ],
			[ 'code' => 'YT','code3' => NULL,'num_code' => NULL,'phone_code' => '269','name' => 'Mayotte' ],
			[ 'code' => 'ZA','code3' => 'ZAF','num_code' => '710','phone_code' => '27','name' => 'South Africa' ],
			[ 'code' => 'ZM','code3' => 'ZMB','num_code' => '894','phone_code' => '260','name' => 'Zambia' ],
			[ 'code' => 'ZW','code3' => 'ZWE','num_code' => '716','phone_code' => '263','name' => 'Zimbabwe' ]
		];

		foreach ($data as $row) {
			Country::firstOrCreate(
				['code' => $row['code']], 
				$row
			);
        }
    }
}