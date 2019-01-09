function euclidean=Histogram(queryImage)
queryImage = imresize(queryImage, [384 256]);
% REQUIRED FEATURE FOR THE IMAGE IS CALCULATED BY CALLING THE RESPECTIVE FUNCTION.
hsvHist = hsvHistogram(queryImage);
FeatureVector = [hsvHist ];

%PRE-CALCULATED "HSV HISTO0GRAM" OF THE DATABASE IMAGES.
dataset=xlsread('hsv.xlsx');

%THE DISTANCE MATRIC USED IS EUCLIDEAN METHOD.
euclidean=zeros(1,size(dataset,1));


for j=1:size(dataset,1)
    euclidean(1,j)=sqrt( sum( power( dataset(j, :) - FeatureVector, 2 ) ) );
    
end

end