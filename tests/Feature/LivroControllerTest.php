<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LivroControllerTest extends TestCase
{
    /**
     * testando rota index.
     *
     * @return void
     */
    public function test_index()
    {
        $this->call('GET', 'livro');
    }
}
