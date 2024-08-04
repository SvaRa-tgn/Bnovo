<?php


// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetGuestTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_quest_status_api_and_json_response(): void
    {
        $response = $this->json('GET', "api/v1/guests/6");

        $response
            ->assertOk()
            ->assertJsonStructure([
                'id',
                'name',
                'surname',
                'email',
                'phone',
                'country',
                'created_at',
                'updated_at',
            ])->assertJson(function (AssertableJson $json): void {
                $json->whereAllType([
                    'id' => 'integer',
                    'name' => 'string',
                    'surname' => 'string',
                    'email' => 'string',
                    'phone' => 'string',
                    'country' => 'string',
                    'created_at' => 'string',
                    'updated_at' => 'string',
                ]);
            });
    }
}
