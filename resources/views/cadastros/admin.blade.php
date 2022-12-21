<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

DB::insert("INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1, 'Admin', 'admin@admin.com', '2022-12-20 22:54:10', '$2y$10\$MTOi.V3eMVUaBIDRpLJzSOVNnCi2qlTkALiVgkix7NfyIqo8.HMTG', NULL, '2022-12-20 22:54:19', '2022-12-20 22:54:20');");

echo "Admin is ready";
