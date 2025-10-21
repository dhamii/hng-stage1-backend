<?php

namespace App\Http\Controllers;

use App\Models\Palindrome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PalindromeController extends Controller
{
    public function index(Request $request){
    
        $word = $request->value;
        if ($word == null){
            return response()->json([
                'status' => 'error',
                'message'=> 'Invalid request body or missing "value" field'
            ], 402);
        }
        $wordType = gettype($request->json('value'));

        if ($wordType !== 'string'){

            return response()->json([   
                'status'=> 'error',
                'message'=> 'Invalid data type for "value" (must be string)'
            ], 422);
            ;
        }

        $word = strtolower($word);
        $word = str_replace(" ","", $word);
        $length = mb_strlen($word);
        
        
        
        $palindrome = strrev($word);
        if($palindrome === $word){
            $palindrome = true;
        }
        else{
            $palindrome = false;
        }
        
        
        $sha256_hash = hash("sha256", $word);

        $word_count = str_word_count($word);
        $split = str_split($word);
        $arr = array_count_values($split);
        $uniqueCharacter = implode("", $arr);
        $uniqueCharacter = strlen($uniqueCharacter);
        $existingWord = Palindrome::where('word', $word)->first();
        if(isset($existingWord)){
        return response()->json([
            'status' => 'error',
            'message'=> 'String already exists in the system'
        ],409);
        }
        $data = new Palindrome();
        $data->word = $word;
        $data->length = $length;
        $data->sha256_hash = $sha256_hash;
        $data->palindrome = $palindrome;
        $data->word_count = $word_count;
        $data->save();
        return response()->json([
            'id' => $sha256_hash,
            'value'=> $word,
            'properties'=>[
                'length'=>$length,
                'is_palindrome' => $palindrome,
                'uniqueCharacter' => $uniqueCharacter,
                "word_count"=> $word_count,
                'sha256_hash' => $sha256_hash,
                'character_frequency_map' => $arr,
                "created_at" => now()
            ],
            ], 201);
    }

    public function retrieve($word){
        $in_system = Palindrome::where('word', $word)->first();
        if(!isset($in_system)){
            return response()->json([
                'status'=> 'error',
                'message'=> 'String does not exist in the system'
            ], 404);
        }
        $word = strtolower($word);
        $word = str_replace(" ","", $word);
        $length = mb_strlen($word);
                $palindrome = strrev($word);
        if($palindrome === $word){
            $palindrome = true;
        }
        else{
            $palindrome = false;
        }
        
        
        $sha256_hash = hash("sha256", $word);

        $word_count = str_word_count($word);
        $split = str_split($word);
        $arr = array_count_values($split);
        $uniqueCharacter = implode("", $arr);
        $uniqueCharacter = strlen($uniqueCharacter);
        return response()->json([
            'id' => $sha256_hash,
            'value'=> $word,
            'properties'=>[
                'length'=>$length,
                'is_palindrome' => $palindrome,
                'uniqueCharacter' => $uniqueCharacter,
                "word_count"=> $word_count,
                'sha256_hash' => $sha256_hash,
                'character_frequency_map' => $arr,
                "created_at" => $in_system->created_at
            ],
            ], 200);
    }
    public function query(){}
    }

