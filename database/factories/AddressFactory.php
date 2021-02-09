<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class AddressFactory extends Factory
{
    var $id_search;
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $data_user = User::all();
        foreach($data_user as $key => $row){
            $data_address = Address::all();
            if(count($data_address) > 0){
                foreach($data_address as $key2 => $row2){
                    if($row->id == $row2->user_id){
                        continue;
                    }else{
                        $this->id_search = $row->id;
                        return $this->id_search;
                    }
                }
            }else{
                $this->id_search = $row->id;
                return $this->id_search;
            }
        }
        return [
            'user_id' => $this->id_search,
            'street' => $this->faker->streetAddress,
            'neighborhood' => $this->faker->streetName,
            'city_residence' => $this->faker->city,
        ];
    }
}

