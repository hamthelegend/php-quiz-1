<?php

    class Date {

        public static function formatDate(string $string): string  {
            $time = strtotime($string);
            return $time ? date("m/d/Y", $time) : "error";
        }

    }