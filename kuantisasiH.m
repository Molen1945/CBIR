function [ Hq ] = kuantisasiH( H )
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%Fungsi untuk kuantisasi komponen H
%H  :   Komponen hue dari ruang warna HSV
%Hq :   Hasil kuantisasi komponen hue
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
Hp0=(H>=316 & H<20)*0;
Hp1=(H>=20 & H<40)*1;
Hp2=(H>=40 & H<75)*2;
Hp3=(H>=75 & H<155)*3;
Hp4=(H>=155 & H<190)*4;
Hp5=(H>=190 & H<270)*5;
Hp6=(H>=270 & H<295)*6;
Hp7=(H>=295 & H<316)*7;
Hq=Hp0+Hp1+Hp2+Hp3+Hp4+Hp5+Hp6+Hp7;
end

