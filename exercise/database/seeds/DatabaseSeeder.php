<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ContactSeeder');
    }
}

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate();
        DB::table('notes')->truncate();
        
        for ($i=0; $i < 10; $i++) { 
          App\Contact::create([
            'name' => $this->randomString(true),
            'phone' => rand(1111111111, 9999999999),
            'email' => $this->randomString(false) . '@' . $this->randomString(false) . '.com'
          ]);
        }
        
        for ($i=0; $i < 100; $i++) { 
          App\Notes::create([
            'note' => $this->randomString(true),
            'contact_id' => rand(0, 9),
          ]);
        }
    }
    
    private function randomString( $uppercase ) {
      $string = '';
      for ($i=0; $i < rand(3,10); $i++) { 
        if ( $i == 0 && $uppercase ) {
          $string .= chr( rand( 65, 90) );
        }
        else {
          $string .= chr( rand( 97, 122) );
        }
      }
      
      return $string;
    }
}
