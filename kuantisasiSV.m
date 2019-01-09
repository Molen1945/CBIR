function [ SVq ] = kuantisasiSV( SV )
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%Fungsi untuk kuantisasi komponen S dan V
%S dan V digabung karena range kuantisasinya sama
%SV     :   Komponen saturation dan value dari ruang warna HSV
%SVq    :   Hasil kuantisasi komponen S dan V
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
SV0=(SV>=0 & SV<=0.2)*0;
SV1=(SV>0.2 & SV<=0.7)*1;
SV2=(SV>0.7 & SV<=1)*2;
SVq=SV0+SV1+SV2;
end

