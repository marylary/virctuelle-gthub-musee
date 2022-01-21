<?php

        Try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=websoftprojet;charset=utf8', 'root', '');
            $bdd ->SetAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_ERRMODE);

	

        }
            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            }



    ?> 