<?php


// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetAllGuestTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_quests_status_api_and_json_response(): void
    {
        $response = $this->json('GET', "api/v1/guests");

        $response
            ->assertOk()
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'name',
                        'surname',
                        'email',
                        'phone',
                        'country',
                        'created_at',
                        'updated_at',
                    ]
                ]
            ])->assertJson(function (AssertableJson $json): void {
                $json->whereAllType([
                    'data' => 'array',
                    'data.0' => 'array',
                    'data.0.id' => 'integer',
                    'data.0.name' => 'string',
                    'data.0.surname' => 'string',
                    'data.0.email' => 'string',
                    'data.0.phone' => 'string',
                    'data.0.country' => 'string',
                    'data.0.created_at' => 'string',
                    'data.0.updated_at' => 'string',
                ]);
            });
    }
}
