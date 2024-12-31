<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDemandeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'unique:demandes_inscription|unique:users,email',
            'telephone' => 'unique:demandes_inscription',
            'numero_rc' => 'unique:demandes_inscription|unique:operateurs',
            'centre_rc' => 'unique:demandes_inscription|unique:operateurs',
            'cin' => 'unique:users',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Email invalide (une demande ou un utilisateur possède déjà cette adresse e-mail)',
            'telephone.unique' => 'Numéro de téléphone invalide (une demande existe déjà pour ce numéro)',
            'numero_rc.unique' => 'Numéro RC invalide (une demande ou un opérateur possède déjà ce numéro)',
            'centre_rc.unique' => 'Centre RC invalide (une demande ou un opérateur possède déjà ce centre RC)',
            'cin.unique' => 'CIN invalide (un utilisateur possède déjà ce CIN)',
        ];
    }
}
