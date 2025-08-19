<?php

namespace Tests\Feature;

use App\Mail\ContactMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_valid_contact_form_submission(): void
    {
        Mail::fake();

        $email = 'stde.cadeiacriativa@sobral.ce.gov.br';

        $formData = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'instituicao' => $this->faker->company,
            'subject' => 'Dúvida',
            'message' => $this->faker->paragraph,
        ];

        $response = $this->postJson('/contato', $formData);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Sua mensagem foi enviada à administração da CICCS. Em caso de necessidade de resposta, a mesma será enviada em breve para você. Agradecemos seu contato!'
        ]);

        Mail::assertSent(ContactMail::class, function ($mail) use ($email) {
            return $mail->hasTo($email);
        });
    }

    public function test_invalid_contact_form_submission_fails_validation(): void
    {
        $invalidData = [
            'name' => null,
            'email' => null,
            'instituicao' => null,
            'subject' => null,
            'message' => null,
        ];

        $response = $this->postJson('/contato', $invalidData);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['subject', 'message']);
    }
}
