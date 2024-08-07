<?php

namespace App\Http\Controllers\Annotations ;

/**
 * @OA\Security(
 *     security={
 *         "BearerAuth": {}
 *     }),

 * @OA\SecurityScheme(
 *     securityScheme="BearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"),

 * @OA\Info(
 *     title="Your API Title",
 *     description="Your API Description",
 *     version="1.0.0"),

 * @OA\Consumes({
 *     "multipart/form-data"
 * }),

 *

 * @OA\POST(
 *     path="/api/etudiants/{etudiant}/restore",
 *     summary="restore",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="path", name="etudiant", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD ETUDIANTS"},
*),


 * @OA\DELETE(
 *     path="/api/etudiants/{etudiant}",
 *     summary="supprimer",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="204", description="Deleted successfully"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 * @OA\Response(response="404", description="Not Found"),
 *     @OA\Parameter(in="path", name="etudiant", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD ETUDIANTS"},
*),


 * @OA\POST(
 *     path="/api/etudiants/{etudiant}",
 *     summary="Modifier Etudiant",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="path", name="etudiant", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 properties={
 *                     @OA\Property(property="prenom", type="string"),
 *                     @OA\Property(property="nom", type="string"),
 *                     @OA\Property(property="email", type="string"),
 *                     @OA\Property(property="date_de_naissace", type="string"),
 *                     @OA\Property(property="adresse", type="string"),
 *                     @OA\Property(property="telephone", type="string"),
 *                     @OA\Property(property="photo", type="string", format="binary"),
 *                     @OA\Property(property="matricule", type="string"),
 *                 },
 *             ),
 *         ),
 *     ),
 *     tags={"CRUD ETUDIANTS"},
*),


 * @OA\GET(
 *     path="/api/etudiants",
 *     summary="Afficher des donées",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD ETUDIANTS"},
*),


 * @OA\POST(
 *     path="/api/etudiants",
 *     summary="ajouter un etudiant",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 type="object",
 *                 properties={
 *                     @OA\Property(property="{
	"matricule": "2",
	"prenom": "Soulaye Mane",
	"nom": "Ndiaye",
	"adresse": "Dakar",
	"telephone": "7761499",
	"email": "soulay@gmail.com",
	"date_de_naissace": "2003\/07\/05",
	"photo": "etudiants\/OHtFjTOjYEBXj6Nx4koFWM86mHuCgw5XlaAgXF8m.jpg",
	"updated_at": "2024-08-06T19:00:25.000000Z",
	"created_at": "2024-08-06T19:00:25.000000Z",
	"id": 2
}", type="string"),
 *                     @OA\Property(property="nom", type="string"),
 *                     @OA\Property(property="prenom", type="string"),
 *                     @OA\Property(property="email", type="string"),
 *                     @OA\Property(property="photo", type="string", format="binary"),
 *                     @OA\Property(property="adresse", type="string"),
 *                     @OA\Property(property="matricule", type="string"),
 *                     @OA\Property(property="telephone", type="string"),
 *                     @OA\Property(property="date_de_naissace", type="string"),
 *                 },
 *             ),
 *         ),
 *     ),
 *     tags={"CRUD ETUDIANTS"},
*),


*/

 class CRUDETUDIANTSAnnotationController {}
