CREATE TABLE `vendeg`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `jogId` INT UNSIGNED NOT NULL,
    `vNev` VARCHAR(255) NOT NULL,
    `vEmail` VARCHAR(255) NOT NULL,
    `vJelszo` VARCHAR(255) NOT NULL,
    `vLakcim` VARCHAR(255) NOT NULL,
    `vSzulDat` DATE NOT NULL,
    `vTelSzam` VARCHAR(255) NOT NULL,
    `kartyaId` INT UNSIGNED NOT NULL,
    `foglalasId` INT UNSIGNED NOT NULL,
    `vSzemelyi` VARCHAR(255) NOT NULL
);

CREATE TABLE `szobak`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `szobaSzam` VARCHAR(255) NOT NULL,
    `ferohely` INT NOT NULL,
    `ar` FLOAT(53) NOT NULL,
    `statusz` BOOLEAN NOT NULL
);

CREATE TABLE `foglalasok`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `vendegId` INT UNSIGNED NOT NULL,
    `szobaId` INT UNSIGNED NOT NULL,
    `erkezes` DATETIME NOT NULL,
    `tavozas` DATETIME NOT NULL,
    `hotelAz` INT UNSIGNED NOT NULL
);

CREATE TABLE `reszlegek`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `rNev` VARCHAR(255) NOT NULL,
    `leiras` VARCHAR(255) NOT NULL,
    `ar` FLOAT(53) NOT NULL,
    `nyitas` TIME NOT NULL,
    `zaras` TIME NOT NULL
);

CREATE TABLE `jogosultsagok`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `reszlegId` INT UNSIGNED NOT NULL,
    `mettol` DATE NOT NULL,
    `meddig` DATE NOT NULL
);

CREATE TABLE `belepesiNaplo`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `vendegId` INT UNSIGNED NOT NULL,
    `reszlegId` INT UNSIGNED NOT NULL,
    `belepes` DATETIME NOT NULL,
    `kilepes` DATETIME NOT NULL
);

CREATE TABLE `hotelek`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nev` VARCHAR(255) NOT NULL,
    `telepulesId` INT UNSIGNED NOT NULL,
    `utca` VARCHAR(255) NOT NULL,
    `hazSzam` VARCHAR(255) NOT NULL,
    `szobakSzama` INT NOT NULL,
    `ferohely` INT NOT NULL,
    `szobaSzam` INT NOT NULL
);

CREATE TABLE `kartya`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `szam` VARCHAR(255) NOT NULL
);

CREATE TABLE `reszlegFoglalas`(
    `vendegId` INT UNSIGNED NOT NULL PRIMARY KEY,
    `reszlegId` INT UNSIGNED NOT NULL,
    `mettol` DATETIME NOT NULL,
    `meddig` DATETIME NOT NULL
);

CREATE TABLE `telepules`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `telepulesNev` VARCHAR(255) NOT NULL,
    `irszam` VARCHAR(255) NOT NULL
);

ALTER TABLE
    `reszlegFoglalas` ADD CONSTRAINT `reszlegfoglalas_vendegid_foreign` FOREIGN KEY(`vendegId`) REFERENCES `vendeg`(`id`);
ALTER TABLE
    `belepesiNaplo` ADD CONSTRAINT `belepesinaplo_vendegid_foreign` FOREIGN KEY(`vendegId`) REFERENCES `vendeg`(`id`);
ALTER TABLE
    `foglalasok` ADD CONSTRAINT `foglalasok_hotelaz_foreign` FOREIGN KEY(`hotelAz`) REFERENCES `hotelek`(`id`);
ALTER TABLE
    `foglalasok` ADD CONSTRAINT `foglalasok_szobaid_foreign` FOREIGN KEY(`szobaId`) REFERENCES `szobak`(`id`);
ALTER TABLE
    `vendeg` ADD CONSTRAINT `vendeg_kartyaid_foreign` FOREIGN KEY(`kartyaId`) REFERENCES `kartya`(`id`);
ALTER TABLE
    `reszlegFoglalas` ADD CONSTRAINT `reszlegfoglalas_reszlegid_foreign` FOREIGN KEY(`reszlegId`) REFERENCES `reszlegek`(`id`);
ALTER TABLE
    `vendeg` ADD CONSTRAINT `vendeg_jogid_foreign` FOREIGN KEY(`jogId`) REFERENCES `jogosultsagok`(`id`);
ALTER TABLE
    `jogosultsagok` ADD CONSTRAINT `jogosultsagok_reszlegid_foreign` FOREIGN KEY(`reszlegId`) REFERENCES `reszlegek`(`id`);
ALTER TABLE
    `belepesiNaplo` ADD CONSTRAINT `belepesinaplo_reszlegid_foreign` FOREIGN KEY(`reszlegId`) REFERENCES `reszlegek`(`id`);
ALTER TABLE
    `vendeg` ADD CONSTRAINT `vendeg_foglalasid_foreign` FOREIGN KEY(`foglalasId`) REFERENCES `foglalasok`(`id`);
ALTER TABLE
    `hotelek` ADD CONSTRAINT `hotelek_telepulesid_foreign` FOREIGN KEY(`telepulesId`) REFERENCES `telepules`(`id`);
ALTER TABLE
    `foglalasok` ADD CONSTRAINT `foglalasok_vendegid_foreign` FOREIGN KEY(`vendegId`) REFERENCES `vendeg`(`id`);