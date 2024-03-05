<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DammySimsResults;

class DammySimsResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DammySimsResults::create([
            'student_number' => '5180/0001/2018',
            'Development_Studies' => 'A',
            'Electronic_Commerce' => 'B',
            'Database_Systems' => 'C',
            'Operating_System_Administration' => 'D',
            'Computerized_Accounting' => 'E',
            'Data_Structure_and_Algorithms' => 'F',
            'Data_Communications' => 'G',
            'Mathematical_Statistics' => 'H',
            'gpa' => '3.9',
        ]);

        DammySimsResults::create([
            'student_number' => '5180/0002/2018',
            'Development_Studies' => 'B',
            'Electronic_Commerce' => 'C',
            'Database_Systems' => 'D',
            'Operating_System_Administration' => 'E',
            'Computerized_Accounting' => 'F',
            'Data_Structure_and_Algorithms' => 'G',
            'Data_Communications' => 'H',
            'Mathematical_Statistics' => 'I',
            'gpa' => '1.9',
        ]);
        
        DammySimsResults::create([
            'student_number' => '5180/0003/2018',
            'Development_Studies' => 'C',
            'Electronic_Commerce' => 'D',
            'Database_Systems' => 'E',
            'Operating_System_Administration' => 'F',
            'Computerized_Accounting' => 'G',
            'Data_Structure_and_Algorithms' => 'H',
            'Data_Communications' => 'I',
            'Mathematical_Statistics' => 'J',
            'gpa' => '2.9',
        ]);
        
        DammySimsResults::create([
            'student_number' => '5180/0004/2018',
            'Development_Studies' => 'D',
            'Electronic_Commerce' => 'E',
            'Database_Systems' => 'F',
            'Operating_System_Administration' => 'G',
            'Computerized_Accounting' => 'H',
            'Data_Structure_and_Algorithms' => 'I',
            'Data_Communications' => 'J',
            'Mathematical_Statistics' => 'K',
            'gpa' => '1.0',
        ]);
        
    }
}
