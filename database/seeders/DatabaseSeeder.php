<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'name' => 'ArtEgre Creator',
             'email' => 'artur.feraru@gmail.com',
             'is_admin' => true,
             'trust_level' => 10,
             'email_verified_at' => now(),
             'password' => Hash::make('01Art2005'),
             'remember_token' => Str::random(10),
         ]);

         User::factory()->count(25)->create();

         Post::factory()->count(50)->create();

         $citate = [
             [
                 'quote' => 'If we pay no attention to it, time does not exist.',
                 'author' => 'Mircea Eliade',
             ],
             [
                 'quote' => 'As long as you have not grasped that you have to die to grow, you are a troubled guest on the dark earth".',
                 'author' => 'Mircea Eliade',
             ],
             [
                 'quote' => 'The way towards wisdom or towards freedom is the way towards your inner being. This is the simplest definition of metaphysics.',
                 'author' => 'Mircea Eliade',
             ],
             [
                 'quote' => 'Light does not come from light, but from darkness.',
                 'author' => 'Mircea Eliade',
             ],
             [
                 'quote' => 'I do not want to be mediocre, this is the fear of my soul and my body.',
                 'author' => 'Mircea Eliade',
             ],
             [
                 'quote' => 'It is not the answer that enlightens, but the question.',
                 'author' => 'Eugen Ionescu',
             ],
             [
                 'quote' => 'Anyone who speaks in the name of others is always an impostor.',
                 'author' => 'Emile M. Cioran',
             ],
             [
                 'quote' => 'The supreme trick of mass insanity is that it persuades you that the only abnormal person is the one who refuses to join in the madness of others, the one who tries vainly to resist. We will never understand totalitarianism if we do not understand that people rarely have the strength to be uncommon.',
                 'author' => 'Eugen Ionescu',
             ],
             [
                 'quote' => 'If one does not understand the usefulness of the useless and the uselessness of the useful, one cannot understand art.',
                 'author' => 'Eugen Ionescu',
             ],
             [
                 'quote' => 'It is not what people think that is important, but the reason they think what they think.',
                 'author' => 'Eugen Ionescu',
             ],
             [
                 'quote' => 'Realism falls short of reality. It shrinks it, attenuates it, falsifies it; it does not take into account our basic truths and our fundamental obsessions: love, death, astonishment. It presents man in a reduced and estranged perspective. Truth is in our dreams, in the imagination.',
                 'author' => 'Eugen Ionescu',
             ],
             [
                 'quote' => 'Explanation separates us from astonishment, which is the only gateway to the incomprehensible.',
                 'author' => 'Eugen Ionescu',
             ],
             [
                 'quote' => 'Logic is a very beautiful thing. As long as it is not abused.',
                 'author' => 'Eugen Ionescu',
             ],
             [
                 'quote' => 'To become conscious of what is horrifying and to laugh at it is to become master of that which is horrifying',
                 'author' => 'Eugen Ionescu',
             ],
             [
                 'quote' => 'I understand that a man can have everything having nothing and nothing having everything.',
                 'author' => 'Mihai Eminescu',
             ],
             [
                 'quote' => 'The sky dreams of stars, the earth dreams of love.',
                 'author' => 'Mihai Eminescu',
             ],
             [
                 'quote' => 'People are divided into two parts: some of them look for and cannot find anything, others find but are not satisfied.',
                 'author' => 'Mihai Eminescu',
             ],
             [
                 'quote' => 'Every human being is a repeated question asked to the spirit of the Universe.',
                 'author' => 'Mihai Eminescu',
             ],
             [
                 'quote' => 'Work is the law of the modern world, which has no place for lazy people.',
                 'author' => 'Mihai Eminescu',
             ],

             [
                 'quote' => 'Humanity adores only those who cause it to perish.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'Once you see that everything is unreal, you can not see why you should bother to prove it.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'Skepticism is the elegance of anxiety.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'No human beings are more dangerous than those who have suffered for a belief',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'No matter which way we go, it is no better than any other. It is all the same whether you achieve something or not, have faith or not, just as it is all the same whether you cry or remain silent.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'Wisdom disguises our wounds; it teaches us how to bleed in secret.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'To hope is to contradict the future.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'Man is a robot with defects.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'Only those moments count, when the desire to remain by yourself is so powerful that you would prefer to blow your brains out than exchange a word with someone.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'If we could see ourselves as others see us, we would vanish on the spot.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'A distant enemy is always preferable to one at the gate.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'Try to be free: you will die of hunger.',
                 'author' => 'Emile M. Cioran',
             ],
             [
                 'quote' => 'Only optimists commit suicide, optimists who no longer succeed at being optimists. The others, having no reason to live, why would they have any to die?',
                 'author' => 'Emile M. Cioran',
             ],
             [
                 'quote' => 'A golden rule: to leave an incomplete image of oneself.',
                 'author' => 'Emile M. Cioran',
             ],
             [
                 'quote' => 'Chaos is rejecting all you have learned, chaos is being yourself.',
                 'author' => 'Emile M. Cioran',
             ],
             [
                 'quote' => 'The fact that life has no meaning is a reason to live - moreover, the only one.',
                 'author' => 'Emile M. Cioran',
             ],

             [
                 'quote' => 'Democracy: a festival of mediocrity.',
                 'author' => 'Emile M. Cioran',
             ],
             [
                 'quote' => 'A decadent civilization compromises with its disease, cherishes the virus infecting it, loses its self-respect.',
                 'author' => 'Emile M. Cioran',
             ],
             [
                 'quote' => 'By all evidence we are in the world to do nothing.',
                 'author' => 'Emile M. Cioran',
             ],
             [
                 'quote' => 'He who hates himself is not humble.',
                 'author' => 'Emile M. Cioran',
             ],
             [
                 'quote' => 'As long as one believes in philosophy, one is healthy; sickness begins when one starts to think.',
                 'author' => 'Emile M. Cioran',
             ],

         ];

         foreach ($citate as $citat) {
             Quote::create($citat);
         }
    }
}
