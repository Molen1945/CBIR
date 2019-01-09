function euclidean=DCD1(queryImage)
% queryImage = imresize(queryImage, [384 256]);
% % REQUIRED FEATURE FOR THE IMAGE IS CALCULATED BY CALLING THE RESPECTIVE FUNCTION.
% hsvHist = hsvHistogram(queryImage);
% FeatureVector = [hsvHist ];

queryImage=rgb2hsv(queryImage);
[P, C] = DCD(queryImage);
FeatureVector = P;

%PRE-CALCULATED "HSV HISTO0GRAM" OF THE DATABASE IMAGES.
dataset=xlsread('dcdbebas.xlsx');

%THE DISTANCE MATRIC USED IS EUCLIDEAN METHOD.
euclidean=zeros(1,size(dataset,1));


for j=1:size(dataset,1)
    euclidean(1,j)=sqrt( sum( power( dataset(j, :) - FeatureVector, 2 ) ) );
    
end

end