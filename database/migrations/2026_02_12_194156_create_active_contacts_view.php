<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $driver = DB::getDriverName();

        if ($driver === 'mysql') {
            DB::statement("
                CREATE OR REPLACE VIEW contact_socials AS
                SELECT
                    id,
                    address,
                    phone,
                    email,
                    JSON_REMOVE(JSON_OBJECT(
                        'instagram', instagram,
                        'twitter', twitter,
                        'facebook', facebook,
                        'linkedin', linkedin,
                        'youtube', youtube,
                        'pinterest', pinterest,
                        'google', google,
                        'github', github,
                        'dribble', dribble
                    ), '$.\"instagram\"' '$.\"twitter\"' '$.\"facebook\"' '$.\"linkedin\"'
                       '$.\"youtube\"' '$.\"pinterest\"' '$.\"google\"' '$.\"github\"' '$.\"dribble\"') AS socials
                FROM contacts
                WHERE instagram IS NOT NULL
                   OR twitter IS NOT NULL
                   OR facebook IS NOT NULL
                   OR linkedin IS NOT NULL
                   OR youtube IS NOT NULL
                   OR pinterest IS NOT NULL
                   OR google IS NOT NULL
                   OR github IS NOT NULL
                   OR dribble IS NOT NULL
            ");
        } elseif ($driver === 'sqlite') {
            DB::statement("DROP VIEW IF EXISTS contact_socials;");

            // SQLite cannot do dynamic JSON column removal
            // So we can concatenate socials into a JSON-like string with only non-null values
            DB::statement("
                CREATE VIEW contact_socials AS
                SELECT
                    id,
                    address,
                    phone,
                    email,
                    '{' ||
                    CASE WHEN instagram IS NOT NULL THEN '\"instagram\":\"' || instagram || '\"' ELSE '' END ||
                    CASE WHEN twitter IS NOT NULL THEN ',\"twitter\":\"' || twitter || '\"' ELSE '' END ||
                    CASE WHEN facebook IS NOT NULL THEN ',\"facebook\":\"' || facebook || '\"' ELSE '' END ||
                    CASE WHEN linkedin IS NOT NULL THEN ',\"linkedin\":\"' || linkedin || '\"' ELSE '' END ||
                    CASE WHEN youtube IS NOT NULL THEN ',\"youtube\":\"' || youtube || '\"' ELSE '' END ||
                    CASE WHEN pinterest IS NOT NULL THEN ',\"pinterest\":\"' || pinterest || '\"' ELSE '' END ||
                    CASE WHEN google IS NOT NULL THEN ',\"google\":\"' || google || '\"' ELSE '' END ||
                    CASE WHEN github IS NOT NULL THEN ',\"github\":\"' || github || '\"' ELSE '' END ||
                    CASE WHEN dribble IS NOT NULL THEN ',\"dribble\":\"' || dribble || '\"' ELSE '' END
                    || '}' AS socials
                FROM contacts
                WHERE instagram IS NOT NULL
                   OR twitter IS NOT NULL
                   OR facebook IS NOT NULL
                   OR linkedin IS NOT NULL
                   OR youtube IS NOT NULL
                   OR pinterest IS NOT NULL
                   OR google IS NOT NULL
                   OR github IS NOT NULL
                   OR dribble IS NOT NULL
            ");
        } elseif ($driver === 'pgsql') {
            // PostgreSQL: json_build_object + filter nulls
            DB::statement("
                CREATE OR REPLACE VIEW contact_socials AS
                SELECT
                    id,
                    address,
                    phone,
                    email,
                    to_jsonb(json_build_object(
                        'instagram', instagram,
                        'twitter', twitter,
                        'facebook', facebook,
                        'linkedin', linkedin,
                        'youtube', youtube,
                        'pinterest', pinterest,
                        'google', google,
                        'github', github,
                        'dribble', dribble
                    )) - null::text AS socials
                FROM contacts
                WHERE instagram IS NOT NULL
                   OR twitter IS NOT NULL
                   OR facebook IS NOT NULL
                   OR linkedin IS NOT NULL
                   OR youtube IS NOT NULL
                   OR pinterest IS NOT NULL
                   OR google IS NOT NULL
                   OR github IS NOT NULL
                   OR dribble IS NOT NULL
            ");
        } else {
            // Fallback
            DB::statement("
                CREATE VIEW contact_socials AS
                SELECT id, address, phone, email
                FROM contacts
                WHERE instagram IS NOT NULL
                   OR twitter IS NOT NULL
                   OR facebook IS NOT NULL
                   OR linkedin IS NOT NULL
                   OR youtube IS NOT NULL
                   OR pinterest IS NOT NULL
                   OR google IS NOT NULL
                   OR github IS NOT NULL
                   OR dribble IS NOT NULL
            ");
        }
    }

    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS contact_socials;");
    }
};
