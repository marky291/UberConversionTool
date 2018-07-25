<?php

namespace Tests\Unit;

use App\Classes\Conversions;
use App\Classes\DonationItems;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GuildStorageTest extends TestCase
{
    /**
     * @test
     */
    public function a_player_can_belong_to_a_guild()
    {
        $guild = factory('App\Guild')->create();

        $member = factory('App\Character')->create(['guild_id' => $guild->guild_id]);

        $this->assertEquals($guild->name, $member->guild->name);
    }

    /**
     * @test
     */
    public function a_player_can_lead_a_guild()
    {
        $leader = factory('App\Character')->create(['name' => 'Assasins Greed']);

        $guild = factory('App\Guild')->create(['char_id'=>$leader->char_id]);

        $this->assertEquals("Assasins Greed", $guild->leader->name);
    }

    /**
     * @test
     */
    public function a_player_may_not_be_the_leader_of_the_guild()
    {
        $guild = factory('App\Guild')->create();

        $member = factory('App\Character')->create(['guild_id' => $guild->guild_id]);

        $this->assertFalse($guild->isCreatedBy($member));

        $this->assertFalse($member->isGuildCreator());
    }
}
