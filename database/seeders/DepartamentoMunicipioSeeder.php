<?php

namespace Database\Seeders;

use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Database\Seeder;

class DepartamentoMunicipioSeeder extends Seeder
{
    public function run(): void
    {
        //Array asociativo. La clave es el departamento y el valor los municipios.
        $DepartamentosMunicipios = [
            'Madriz' => [
                'Somoto',
                'Telpaneca',
                'San Lucas',
                'Las Sabanas',
                'Palacagüina',
                'San José de Cusmapa',
                'Yalagüina',
                'Totogalpa',
                'San Juan del Río Coco'
            ],
            'Boaco' => [
                'Boaco',
                'Camoapa',
                'San José de los Remates',
                'Santa Lucía',
                'San Lorenzo',
                'Teustepe'
            ],
            'Carazo' => [
                'Jinotepe',
                'Diriamba',
                'San Marcos',
                'Santa Teresa',
                'Dolores',
                'El Rosario',
                'La Conquista',
                'La Paz de Oriente'
            ],
            'Chinandega' => [
                'chichigalpa',
                'Chinandega',
                'Cinco Pinos',
                'Corinto',
                'El Realejo',
                'El Viejo',
                'Posoltega',
                'Puerto Morazán',
                'San Francisco del Norte',
                'San Pedro del Norte',
                'Somotillo',
                'Villanueva'
            ],
            'Chontales' => [
                'Juigalpa',
                'Acoyapa',
                'Comalapa',
                'El Coral',
                'La Libertad',
                'San Pedro de Lóvago',
                'Santo Domingo',
                'Santo Tomás',
                'Cuapa',
                'Villa Sandino'
            ],
            'Costa Caribe Norte' => [
                'Puerto Cabezas',
                'Bonanza',
                'Mulukukú',
                'Siuna',
                'Rosita',
                'Waspam',
                'Waslala',
                'Prinzapolka'
            ],
            'Costa Caribe Sur' => [
                'Bluefields',
                'Corn Island',
                'Desembocadura de Río Grande',
                'El Ayote',
                'El Rama',
                'El Tortuguero',
                'Kukra Hill',
                'La Cruz de Río Grande',
                'Laguna de Perlas',
                'Muelle de los Bueyes',
                'Nueva Guinea',
                'Paiwas'
            ],
            'Estelí' => [
                'Estelí',
                'Condega',
                'La Trinidad',
                'Pueblo Nuevo',
                'San Juan de Limay',
                'San Nicolás'
            ],
            'Granada' => [
                'Granada',
                'Diriá',
                'Diriomo',
                'Nandaime'
            ],
            'Jinotega' => [
                'El Cuá',
                'Güigüilí de Jinotega',
                'Jinotega',
                'La Concordia',
                'San José de Bocay',
                'San Rafael del Norte',
                'San Sebastián de Yalí',
                'Santa María de Pantasma',
            ],
            'León' => [
                'Achuapa',
                'El Jicaral',
                'El Sauce',
                'La Paz Centro',
                'León',
                'Nagarote',
                'Quezalguaque',
                'Santa Rosa del Peñón',
                'Telica'
            ],
            'Managua' => [
                'Ciudad Sandino',
                'El Crucero',
                'Managua',
                'Mateare',
                'San Francisco Libre',
                'San Rafael del Sur',
                'Ticuantepe',
                'Tipitapa',
                'Villa El Carmen'
            ],
            'Masaya' => [
                'Catarina',
                'La Concepción',
                'Masatepe',
                'Masaya',
                'Nandasmo',
                'Nindirí',
                'Niquinohomo',
                'San Juan de Oriente',
                'Tisma'
            ],
            'Matagalpa' => [
                'Ciudad Darío',
                'El Tuma-La Dalia',
                'Esquipulas',
                'Matagalpa',
                'Matiguás',
                'Muy Muy',
                'Rancho Grande',
                'Río Blanco',
                'San Dionisio',
                'San Isidro',
                'San Ramón',
                'Sébaco',
                'Terrabona'
            ],
            'Nueva Segovia' => [
                'Ciudad Antigua',
                'Dipilto',
                'El Jícaro',
                'Güigüilí',
                'Jalapa',
                'Macuelizo',
                'Mozonte',
                'Murra',
                'Ocotal',
                'Quilalí',
                'San Fernando',
                'Santa María'
            ],
            'Río San Juan' => [
                'El Almendro',
                'El Castillo',
                'Morrito',
                'San Carlos',
                'San Juan de Nicaragua',
                'San Miguelito'
            ],
            'Rivas' => [
                'Altagracia',
                'Belén',
                'Buenos Aires',
                'Cárdenas',
                'Moyogalpa',
                'Potosí',
                'Rivas',
                'San Jorge',
                'San Juan del Sur',
                'Tola'
            ]
            ];
        
        // Recorrer el array y crear los departamentos y municipios
        foreach ($DepartamentosMunicipios as $nombreDepartamento => $municipios) {
            
            // Crear el departamento
            $departamento = Departamento::create([
                'nombre' => $nombreDepartamento,
            ]);

            // Crear cada municipio para este departamento
            foreach ($municipios as $nombreMunicipio) {
                Municipio::create([
                    'nombre' => $nombreMunicipio,
                    'departamento_id' => $departamento->id,
                ]);
            }
        }
    }
}