CREATE TABLE `vendeg`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `jogId` INT NOT NULL,
    `vNev` VARCHAR(255) NOT NULL,
    `vEmail` VARCHAR(255) NOT NULL,
    `vJelszo` VARCHAR(255) NOT NULL,
    `vLakcím` VARCHAR(255) NOT NULL,
    `vSzulDat` DATE NOT NULL,
    `vTelSzam` VARCHAR(255) NOT NULL,
    `kartyaId` INT NOT NULL,
    `foglalasId` INT NOT NULL
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
    `vendegId` INT NOT NULL,
    `szobaId` INT NOT NULL,
    `erkezes` DATETIME NOT NULL,
    `tavozas` DATETIME NOT NULL,
    `hotelAz` INT NOT NULL
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
    `vendegId` INT NOT NULL,
    `reszlegId` INT NOT NULL,
    `mettol` DATE NOT NULL,
    `meddig` DATE NOT NULL
);
CREATE TABLE `belepesiNaplo`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `vendegId` INT NOT NULL,
    `reszlegId` INT NOT NULL,
    `belepes` DATETIME NOT NULL,
    `kilepes` DATETIME NOT NULL
);
CREATE TABLE `hotelek`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nev` VARCHAR(255) NOT NULL,
    `irszam` VARCHAR(255) NOT NULL,
    `telepules` VARCHAR(255) NOT NULL,
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
    `vendegId` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `reszlegId` INT NOT NULL,
    `mettol` DATETIME NOT NULL,
    `meddig` DATETIME NOT NULL
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
    `kartya` ADD CONSTRAINT `kartya_id_foreign` FOREIGN KEY(`id`) REFERENCES `vendeg`(`kartyaId`);
ALTER TABLE
    `reszlegFoglalas` ADD CONSTRAINT `reszlegfoglalas_reszlegid_foreign` FOREIGN KEY(`reszlegId`) REFERENCES `reszlegek`(`id`);
ALTER TABLE
    `vendeg` ADD CONSTRAINT `vendeg_jogid_foreign` FOREIGN KEY(`jogId`) REFERENCES `jogosultsagok`(`id`);
ALTER TABLE
    `jogosultsagok` ADD CONSTRAINT `jogosultsagok_reszlegid_foreign` FOREIGN KEY(`reszlegId`) REFERENCES `reszlegek`(`id`);
ALTER TABLE
    `belepesiNaplo` ADD CONSTRAINT `belepesinaplo_reszlegid_foreign` FOREIGN KEY(`reszlegId`) REFERENCES `reszlegek`(`id`);
ALTER TABLE
    `foglalasok` ADD CONSTRAINT `foglalasok_id_foreign` FOREIGN KEY(`id`) REFERENCES `vendeg`(`foglalasId`);