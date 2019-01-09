function cbirhau(vector,filename)
fprintf('Please Wait..............Your Program is running');
fprintf(filename);
vector
uploaded = strcat('C:\xampp\htdocs\CBIR\uploads\',filename);
queryImage = imread(uploaded);

distance=zeros(1,1000);

if(vector(1)==1)
    distance1=Moments(queryImage);
    distance=distance1;
    fprintf('1');
end

if(vector(2)==2)
    distance2=Correlogram(queryImage);
        distance=[distance;distance2];
        fprintf('2');
end

if(vector(3)==3)
    distance3=Histogram(queryImage);
         distance=[distance;distance3];
        fprintf('3');
end

if(vector(4)==4)
    distance4=Gabor(queryImage);
        distance=[distance;distance4];
        fprintf('4');
end

if(vector(5)==5)
    distance5=Wavelet(queryImage);
     distance=[distance;distance5];
    fprintf('5');
end

if(vector(6)==6)
   distance6=CentMoments(queryImage);
   distance=[distance;distance6];
   fprintf('6');
end

if(vector(7)==7)
    distance7=Fourier(queryImage);
     distance=[distance;distance7];
    fprintf('7');
end

if(vector(8)==8)
    cbirsift(uploaded);
else
euclidean= max(distance,[],1);

outputFolder = 'C:\xampp\htdocs\CBIR\retrieved';
if ~exist(outputFolder, 'dir')
mkdir(outputFolder);
end

[sortedeuclidean, sortedIndices] = sort(euclidean,'ascend');
max10indices = sortedIndices(1:10);
xyz = dir('C:\xampp\htdocs\CBIR\images\*.jpg');

for m = 1:8
    outputBaseFileName = sprintf('%3.3d.jpg',m);
outputFullFileName = fullfile(outputFolder, outputBaseFileName);  
    img_name = max10indices(m);
    str_img_name = strcat('C:\xampp\htdocs\CBIR\images\', xyz(img_name).name);
    returned_img = imread(str_img_name);
 imwrite(returned_img, outputFullFileName, 'jpg');
end

img_name = max10indices(1);
str_img_name = strcat('C:\xampp\htdocs\CBIR\images\', xyz(img_name).name);
returned_img = imread(str_img_name);
outputBaseFileName = sprintf('%3.3d.jpg',1);
outputFullFileName = fullfile(outputFolder, outputBaseFileName);
imwrite(returned_img, outputFullFileName, 'jpg');

end
rmdir('temporary','s')
fprintf('\n Your Program has been Ended!!!!!!You can view your output from Webpage \n');
end