<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    // Récupérer l'utilisateur actuel
    $user = $request->user();

    // Remplir les données mises à jour de l'utilisateur
    $user->fill($request->validated());

    // Vérifier si l'email a été modifié pour réinitialiser la vérification
    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }

    // Mettre à jour le champ 'first_name'
    $user->first_name = $request->input('first_name', $user->first_name);

    // Sauvegarder les modifications de l'utilisateur
    $user->save();

    // Rediriger avec un message de succès
    return Redirect::route('profile.edit')->with('status', 'profile-updated');
}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
