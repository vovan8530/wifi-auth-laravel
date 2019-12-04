<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Setting::class)->create(['settings_name' => 'Instagram_url']);
        factory(Setting::class)->create(['settings_name' => 'Calendar_url']);
        factory(Setting::class)->create(['settings_name' => 'Map_url']);
        factory(Setting::class)->create(['settings_name' => 'Plate_url']);
        factory(Setting::class)->create(['settings_name' => 'Rocks_url']);
        factory(Setting::class)->create(['settings_name' => 'Facebook_url']);
        factory(Setting::class)->create(['settings_name' => 'Checkbox_popup_de', 'settings_value' => 'Wenn Sie mit den Nutzungsbedingungen einverstanden sind, füllen Sie bitte die Kontrollkästchen aus']);
        factory(Setting::class)->create(['settings_name' => 'Checkbox_popup_en', 'settings_value' => 'If you agree with terms of use please fill checkboxes']);
        factory(Setting::class)->create(['settings_name' => 'Link_popup_de', 'settings_value' => "<h2>Lorem ipsum Karotten Rabatte erhöht. Pentax Optio durch lobten die Prinzipien der Wahrheit geblendet und sie zu bezahlen.</h2>
			                                                                                      <p>Lorem ipsum dolor sitzen amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>

			                                                                                      <h2>Lorem ipsum dolor sitzt amet</h2>
			                                                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>
			                                                                                      <p>Lorem ipsum dolor sitzen amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>
			                                                                                      <p>Lorem ipsum dolor sitzen amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>
			                                                                                      <p>Lorem ipsum dolor sitzen amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>
			                                                                                      <p>Lorem ipsum dolor sitzen amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>

			                                                                                      <h2>Lorem Ipsum Dolor sitzen</h2>
			                                                                                      <p>Lorem ipsum dolor sitzen amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>
			                                                                                      <p>Lorem ipsum dolor sitzen amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>"]);



        factory(Setting::class)->create(['settings_name' => 'Link_popup_en', 'settings_value' => "<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio veritatis atque pariatur obcaecati laudantium eos.</h2>
			                                                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>

			                                                                                      <h2>Lorem ipsum dolor sit amet</h2>
			                                                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>
			                                                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>
			                                                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>
			                                                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>
			                                                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>

			                                                                                      <h2>Lorem ipsum dolor sit</h2>
			                                                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>
			                                                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fugit cum dolorem suscipit molestias sapiente!</p>"
        ]);
    }
}
