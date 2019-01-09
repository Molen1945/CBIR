function [ P,C ] = DCD (A)

% % Pemilahan komponen HSV
H = A(:,:,1);
H = H*360;
S = A(:,:,2);
V = A(:,:,3);

% Kuantisasi komponen HSV
Hq = kuantisasiH(H);
Sq = kuantisasiSV(S);
Vq = kuantisasiSV(V);

% Pembuatan matriks HSV
C = round(9*Hq+3*Sq+Vq);

[m,n]=size(C); 
warna=zeros(1,72);

% 
% Dominant Color Computation
% Menghitung histogram dari matriks C
% Pi : matriks 1x72
% Pi : Persentase histogram dari matriks C 
for k=0:71
    histogram_warna=(C==k);
    warna(k+1)=sum(sum(histogram_warna));
end
Pi=warna/(m*n);

M=8;    %8 first dominant colors
% Nilai Pi diurutkan descending/menurun (nilai tertinggi sampai terendah)
% Qj : Nilai Pi yang sudah diurutkan descending
% I : indeks dari nilai Pi yang sudah diurutkan descending
[Qj, I]=sort(Pi,'descend');

% Qj : Mengambil 8 nilai Qj yang pertama (8 nilai tertinggi)
Qj=Qj(1:M);

% Pi1 : matriks 0 dengan ukuran 1x72 
Pi1=zeros(1,72);

% I : mengambil 8 indeks pertama dari indeks nilai Pi yang sudah diurutkan
% descending
I=I(1:M);

% Pi1 : memasukkan nilai Qj kedalam matriks Pi1 berdasarkan indeks I
% nilai Qj tersebut berjumlah 8, sehingga matriks Pi1 berisi 8 nilai dari
% matriks Pi (8 nilai tertinggi) sedangkan sisanya bernilai 0
Pi1(I)=Qj;

% Normalisasi warna dominan
Pp=Pi1/sum(Qj);
P=Pp;

end

