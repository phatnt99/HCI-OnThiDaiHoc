
$(document).ready(function()
{
	var pathname = window.location.pathname;
	var loai="";
	var khoi="";
	var mon="";
	var baihoc="";
	var next="";
	var prev="";
	var currentCau=0;
	var baihoc_toan=[
	'Tính đơn điệu của hàm số',
	'Cực trị của hàm số',
	'Giá trị lớn nhất, giá trị nhỏ nhất',
	'Đường tiệm cận',
	'Khảo sát hàm số',
	'Hàm ngược, hàm lượng giác ngược',
	'Hàm số lũy thừa',
	'Hàm số mũ',
	'Hàm số logarit',
	'Phương trình mũ, phương trình logarit',
	'Bất phương trình mũ, bất phương trình logarit',
	'Nguyên hàm. Những tính chất cơ bản của nguyên hàm',
	'Các phương pháp tính nguyên hàm',
	'Ứng dụng của tích phân',
	'Số phức và các phép toán về số phức',
	'Biểu diễn hình học số phức',
	'Dạng lượng giác của số phức',
	'Giải phương trình số phức',
	'Casio và số phức',
	'Đường thẳng và mặt phẳng. Quan hệ song song, vuông góc',
	'Khoảng cách',
	'Khoảng cách giữa hai đường thẳng chéo nhau',
	'Góc',
	'Mối liên hệ giữa khoảng cách và góc',
	'Khối đa diện. Khối đa diện đều',
	'Thể tích khối đa diện',
	'Mặt tròn xoay. Diện tích. Thể tích',
	'Vector trong không gian',
	'Phương trình mặt cầu, mặt phẳng, đường thẳng',
	'Áp dụng casio tính hình học tọa độ Oxyz',
	];

	var dethi=[
	{
		id:'01',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:null,
		dapandung:0,
		loigiai: 'Giải câu 01',
		flag:false,
		dalam: false
	},

	{
		id:'02',
		noidung: 'Tính biểu thức sau:',
		img: null,
		dapan:[
		'15',
		'16',
		'17',
		'18',
		],
		cautraloi:null,
		dapandung:2,
		loigiai: 'Giải câu 02',
		flag:false,
		dalam: false
	},

	{
		id:'03',
		noidung: 'Tính biểu thức sau:',
		img: null,
		dapan:[
		'15',
		'16',
		'17',
		'18',
		],
		cautraloi:null,
		dapandung:2,
		loigiai: 'Giải câu 03',
		flag:false,
		dalam: false
	},

	{
		id:'04',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:null,
		dapandung:0,
		loigiai: 'Giải câu 04',
		flag:false,
		dalam: false
	},

	{
		id:'05',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:null,
		dapandung:0,
		loigiai: 'Giải câu 05',
		flag:false,
		dalam: false
	},

	{
		id:'06',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:null,
		dapandung:0,
		loigiai: 'Giải câu 06',
		flag:false,
		dalam: false
	},

	{
		id:'07',
		noidung: 'Tính biểu thức sau:',
		img: null,
		dapan:[
		'15',
		'16',
		'17',
		'18',
		],
		cautraloi:null,
		dapandung:2,
		loigiai: 'Giải câu 07',
		flag:false,
		dalam: false
	},

	{
		id:'08',
		noidung: 'Tính biểu thức sau:',
		img: null,
		dapan:[
		'15',
		'16',
		'17',
		'18',
		],
		cautraloi:null,
		dapandung:2,
		loigiai: 'Giải câu 08',
		flag:false,
		dalam: false
	},

	{
		id:'09',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:null,
		dapandung:0,
		loigiai: 'Giải câu 09',
		flag:false,
		dalam: false
	},

	{
		id:'10',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:null,
		dapandung:0,
		loigiai: 'Giải câu 10',
		flag:false,
		dalam: false
	},
	];


	var dethidalam=[
	{
		id:'01',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:0,
		dapandung:0,
		loigiai: 'Giải câu 01',
		flag:false,
		dalam: false
	},

	{
		id:'02',
		noidung: 'Tính biểu thức sau:',
		img: null,
		dapan:[
		'15',
		'16',
		'17',
		'18',
		],
		cautraloi:1,
		dapandung:2,
		loigiai: 'Giải câu 02',
		flag:false,
		dalam: false
	},

	{
		id:'03',
		noidung: 'Tính biểu thức sau:',
		img: null,
		dapan:[
		'15',
		'16',
		'17',
		'18',
		],
		cautraloi:2,
		dapandung:2,
		loigiai: 'Giải câu 03',
		flag:false,
		dalam: false
	},

	{
		id:'04',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:3,
		dapandung:0,
		loigiai: 'Giải câu 04',
		flag:false,
		dalam: false
	},

	{
		id:'05',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:2,
		dapandung:0,
		loigiai: 'Giải câu 05',
		flag:false,
		dalam: false
	},

	{
		id:'06',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:1,
		dapandung:0,
		loigiai: 'Giải câu 06',
		flag:true,
		dalam: false
	},

	{
		id:'07',
		noidung: 'Tính biểu thức sau:',
		img: null,
		dapan:[
		'15',
		'16',
		'17',
		'18',
		],
		cautraloi:2,
		dapandung:2,
		loigiai: 'Giải câu 07',
		flag:false,
		dalam: false
	},

	{
		id:'08',
		noidung: 'Tính biểu thức sau:',
		img: null,
		dapan:[
		'15',
		'16',
		'17',
		'18',
		],
		cautraloi:2,
		dapandung:2,
		loigiai: 'Giải câu 08',
		flag:false,
		dalam: false
	},

	{
		id:'09',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:0,
		dapandung:0,
		loigiai: 'Giải câu 09',
		flag:false,
		dalam: false
	},

	{
		id:'10',
		noidung: 'Tính biểu thức sau:',
		img:'images/loai1.PNG',
		dapan:[
		'images/A.PNG',
		'images/B.PNG',
		'images/C.PNG',
		'images/D.PNG',
		],
		cautraloi:0,
		dapandung:0,
		loigiai: 'Giải câu 10',
		flag:true,
		dalam: false
	},
	];

	//load cau 1 thionline
	if(pathname == '/OnThiTHPTQG/public/')
	{
		console.log($('#ChuaDangNhap')[0].style.display);
		$('#ChuaDangNhap')[0].style.display = 'flex';
	}
	else
	{
		console.log('khong');
		$('#DaDangNhap')[0].style.display = 'none';
	}

	function CauHoi()
	{
		//
		$('#chonA')[0].style.backgroundColor = 'transparent';
		$('#chonA')[0].style.color = 'black';
		$('#chonB')[0].style.backgroundColor = 'transparent';
		$('#chonB')[0].style.color = 'black';
		$('#chonC')[0].style.backgroundColor = 'transparent';
		$('#chonC')[0].style.color = 'black';
		$('#chonD')[0].style.backgroundColor = 'transparent';
		$('#chonD')[0].style.color = 'black';

		

		if(pathname == '/OnThiTHPTQG/public/thionline')
		{
			switch(dethi[currentCau].cautraloi)
			{
				case 0:
				$('#chonA').click();
				break;
				case 1:
				$('#chonB').click();
				break;
				case 2:
				$('#chonC').click();
				break;
				case 3:
				$('#chonD').click();
				break;
			}
			if(dethi[currentCau].flag == true )
			{
				$('#btnFlag')[0].style.color = "#FF0000";
			}
			else
			{
				$('#btnFlag')[0].style.color = "black";
			}

			$('#cau').text("");
			$('#noidung').text("");
			$('#img').empty();
			$('#dapanA').empty();
			$('#dapanB').empty();
			$('#dapanC').empty();
			$('#dapanD').empty();
			$('#cau').text('Câu ' + dethi[currentCau].id + ':');
			$('#noidung').text(dethi[currentCau].noidung);
			if(dethi[currentCau].img != null)
			{
				$('#img').append("<img src=" + dethi[currentCau].img +" class='card-img-top' alt='...'>");
			}
			else
			{
				$('#img').empty();
			}

			var kt = /images.*/g;

			if(kt.test(dethi[currentCau].dapan[0]))
			{
				$('#dapanA').append("<img src=" + dethi[currentCau].dapan[0] +" class='card-img-top' alt='...'>");
			}
			else
			{
				$('#dapanA').append("<p style='font-size: 20px; color: black; font-family: 'Mali', cursive;float: left;'>"+dethi[currentCau].dapan[0]+"</p>");
			}

			if(((dethi[currentCau].dapan[1]).split('/'))[0] == 'images')
			{
				$('#dapanB').append("<img src=" + dethi[currentCau].dapan[1] +" class='card-img-top' alt='...'>");
			}
			else
			{
				$('#dapanB').append("<p style='font-size: 20px; color: black; font-family: 'Mali', cursive;float: left;'>"+dethi[currentCau].dapan[1]+"</p>");
			}

			if(((dethi[currentCau].dapan[2]).split('/'))[0] == 'images')
			{
				$('#dapanC').append("<img src=" + dethi[currentCau].dapan[2] +" class='card-img-top' alt='...'>");
			}
			else
			{
				$('#dapanC').append("<p style='font-size: 20px; color: black; font-family: 'Mali', cursive;float: left;'>"+dethi[currentCau].dapan[2]+"</p>");
			}

			if(((dethi[currentCau].dapan[3]).split('/'))[0] == 'images')
			{
				$('#dapanD').append("<img src=" + dethi[currentCau].dapan[3] +" class='card-img-top' alt='...'>");
			}
			else
			{
				$('#dapanD').append("<p style='font-size: 20px; color: black; font-family: 'Mali', cursive;float: left;'>"+dethi[currentCau].dapan[3]+"</p>");
			}
		}
		
		//
		
		
		if(pathname == '/OnThiTHPTQG/public/xemketqua')
		{
			if(dethidalam[currentCau].cautraloi == dethidalam[currentCau].dapandung)
			{
				switch(dethidalam[currentCau].cautraloi)
				{
					case 0:
					$('#chonA')[0].style.backgroundColor = '#00B568';
					$('#chonA')[0].style.color = 'white';
					$('#chonB')[0].style.backgroundColor = 'transparent';
					$('#chonB')[0].style.color = 'black';
					$('#chonC')[0].style.backgroundColor = 'transparent';
					$('#chonC')[0].style.color = 'black';
					$('#chonD')[0].style.backgroundColor = 'transparent';
					$('#chonD')[0].style.color = 'black';
					break;
					case 1:
					$('#chonB')[0].style.backgroundColor = '#00B568';
					$('#chonB')[0].style.color = 'white';
					$('#chonA')[0].style.backgroundColor = 'transparent';
					$('#chonA')[0].style.color = 'black';
					$('#chonC')[0].style.backgroundColor = 'transparent';
					$('#chonC')[0].style.color = 'black';
					$('#chonD')[0].style.backgroundColor = 'transparent';
					$('#chonD')[0].style.color = 'black';
					break;
					case 2:
					$('#chonC')[0].style.backgroundColor = '#00B568';
					$('#chonC')[0].style.color = 'white';
					$('#chonA')[0].style.backgroundColor = 'transparent';
					$('#chonA')[0].style.color = 'black';
					$('#chonB')[0].style.backgroundColor = 'transparent';
					$('#chonB')[0].style.color = 'black';
					$('#chonD')[0].style.backgroundColor = 'transparent';
					$('#chonD')[0].style.color = 'black';
					break;
					case 3:
					$('#chonD')[0].style.backgroundColor = '#00B568';
					$('#chonD')[0].style.color = 'white';
					$('#chonA')[0].style.backgroundColor = 'transparent';
					$('#chonA')[0].style.color = 'black';
					$('#chonB')[0].style.backgroundColor = 'transparent';
					$('#chonB')[0].style.color = 'black';
					$('#chonC')[0].style.backgroundColor = 'transparent';
					$('#chonC')[0].style.color = 'black';
					break;
				}
			}
			else
			{
				switch(dethidalam[currentCau].cautraloi)
				{
					case 0:
					$('#chonA')[0].style.backgroundColor = '#FF0000';
					$('#chonA')[0].style.color = 'white';
					$('#chonB')[0].style.backgroundColor = 'transparent';
					$('#chonB')[0].style.color = 'black';
					$('#chonC')[0].style.backgroundColor = 'transparent';
					$('#chonC')[0].style.color = 'black';
					$('#chonD')[0].style.backgroundColor = 'transparent';
					$('#chonD')[0].style.color = 'black';
					switch(dethidalam[currentCau].dapandung)
					{
						case 1:
						$('#chonB')[0].style.backgroundColor = '#00B568';
						$('#chonB')[0].style.color = 'white';

						break;
						case 2:
						$('#chonC')[0].style.backgroundColor = '#00B568';
						$('#chonC')[0].style.color = 'white';

						break;
						case 3:
						$('#chonD')[0].style.backgroundColor = '#00B568';
						$('#chonD')[0].style.color = 'white';
						break;
					}
					break;
					case 1:
					$('#chonB')[0].style.backgroundColor = '#FF0000';
					$('#chonB')[0].style.color = 'white';
					$('#chonA')[0].style.backgroundColor = 'transparent';
					$('#chonA')[0].style.color = 'black';
					$('#chonC')[0].style.backgroundColor = 'transparent';
					$('#chonC')[0].style.color = 'black';
					$('#chonD')[0].style.backgroundColor = 'transparent';
					$('#chonD')[0].style.color = 'black';
					switch(dethidalam[currentCau].dapandung)
					{
						case 0:
						$('#chonA')[0].style.backgroundColor = '#00B568';
						$('#chonA')[0].style.color = 'white';

						break;
						case 2:
						$('#chonC')[0].style.backgroundColor = '#00B568';
						$('#chonC')[0].style.color = 'white';

						break;
						case 3:
						$('#chonD')[0].style.backgroundColor = '#00B568';
						$('#chonD')[0].style.color = 'white';
						break;
					}
					break;
					case 2:
					$('#chonC')[0].style.backgroundColor = '#FF0000';
					$('#chonC')[0].style.color = 'white';
					$('#chonA')[0].style.backgroundColor = 'transparent';
					$('#chonA')[0].style.color = 'black';
					$('#chonB')[0].style.backgroundColor = 'transparent';
					$('#chonB')[0].style.color = 'black';
					$('#chonD')[0].style.backgroundColor = 'transparent';
					$('#chonD')[0].style.color = 'black';
					switch(dethidalam[currentCau].dapandung)
					{
						case 0:
						$('#chonA')[0].style.backgroundColor = '#00B568';
						$('#chonA')[0].style.color = 'white';

						break;
						case 2:
						$('#chonB')[0].style.backgroundColor = '#00B568';
						$('#chonB')[0].style.color = 'white';

						break;
						case 3:
						$('#chonD')[0].style.backgroundColor = '#00B568';
						$('#chonD')[0].style.color = 'white';
						break;
					}
					break;
					case 3:
					$('#chonD')[0].style.backgroundColor = '#FF0000';
					$('#chonD')[0].style.color = 'white';
					$('#chonA')[0].style.backgroundColor = 'transparent';
					$('#chonA')[0].style.color = 'black';
					$('#chonB')[0].style.backgroundColor = 'transparent';
					$('#chonB')[0].style.color = 'black';
					$('#chonC')[0].style.backgroundColor = 'transparent';
					$('#chonC')[0].style.color = 'black';
					switch(dethidalam[currentCau].dapandung)
					{
						case 0:
						$('#chonA')[0].style.backgroundColor = '#00B568';
						$('#chonA')[0].style.color = 'white';

						break;
						case 2:
						$('#chonB')[0].style.backgroundColor = '#00B568';
						$('#chonB')[0].style.color = 'white';

						break;
						case 3:
						$('#chonC')[0].style.backgroundColor = '#00B568';
						$('#chonC')[0].style.color = 'white';
						break;
					}
					break;
				}

			}
			

			if(dethidalam[currentCau].flag == true )
			{
				$('#btnFlag')[0].style.color = "#FF0000";
			}
			else
			{
				$('#btnFlag')[0].style.color = "black";
			}

			$('#cau').text("");
			$('#noidung').text("");
			$('#img').empty();
			$('#dapanA').empty();
			$('#dapanB').empty();
			$('#dapanC').empty();
			$('#dapanD').empty();
			$('#cau').text('Câu ' + dethi[currentCau].id + ':');
			$('#noidung').text(dethi[currentCau].noidung);
			if(dethi[currentCau].img != null)
			{
				$('#img').append("<img src=" + dethi[currentCau].img +" class='card-img-top' alt='...'>");
			}
			else
			{
				$('#img').empty();
			}

			var kt = /images.*/g;

			if(kt.test(dethi[currentCau].dapan[0]))
			{
				$('#dapanA').append("<img src=" + dethi[currentCau].dapan[0] +" class='card-img-top' alt='...'>");
			}
			else
			{
				$('#dapanA').append("<p style='font-size: 20px; color: black; font-family: 'Mali', cursive;float: left;'>"+dethi[currentCau].dapan[0]+"</p>");
			}

			if(((dethi[currentCau].dapan[1]).split('/'))[0] == 'images')
			{
				$('#dapanB').append("<img src=" + dethi[currentCau].dapan[1] +" class='card-img-top' alt='...'>");
			}
			else
			{
				$('#dapanB').append("<p style='font-size: 20px; color: black; font-family: 'Mali', cursive;float: left;'>"+dethi[currentCau].dapan[1]+"</p>");
			}

			if(((dethi[currentCau].dapan[2]).split('/'))[0] == 'images')
			{
				$('#dapanC').append("<img src=" + dethi[currentCau].dapan[2] +" class='card-img-top' alt='...'>");
			}
			else
			{
				$('#dapanC').append("<p style='font-size: 20px; color: black; font-family: 'Mali', cursive;float: left;'>"+dethi[currentCau].dapan[2]+"</p>");
			}

			if(((dethi[currentCau].dapan[3]).split('/'))[0] == 'images')
			{
				$('#dapanD').append("<img src=" + dethi[currentCau].dapan[3] +" class='card-img-top' alt='...'>");
			}
			else
			{
				$('#dapanD').append("<p style='font-size: 20px; color: black; font-family: 'Mali', cursive;float: left;'>"+dethi[currentCau].dapan[3]+"</p>");
			}
			console.log('vo');
			$('#giai').text(dethi[currentCau].loigiai);

		}
		
	}

	if(pathname == '/OnThiTHPTQG/public/thionline' || pathname == '/OnThiTHPTQG/public/xemketqua')
	{
		console.log(dethi);
		currentCau=0;
		CauHoi();
	}

	$('[name=sentence]').each((i, e) => {
		e.addEventListener('click',(er) => {
			currentCau=i;
			CauHoi();
		})})

	

	//Chon cau hoi
	if(pathname == '/OnThiTHPTQG/public/thionline')
	{
		$('#chonA').click(function() {
		//alert('aaa');
		this.style.backgroundColor = '#00B568';
		this.style.color = 'white';
		$('#chonB')[0].style.backgroundColor = 'transparent';
		$('#chonB')[0].style.color = 'black';
		$('#chonC')[0].style.backgroundColor = 'transparent';
		$('#chonC')[0].style.color = 'black';
		$('#chonD')[0].style.backgroundColor = 'transparent';
		$('#chonD')[0].style.color = 'black';
		dethi[currentCau].cautraloi=0;
		if(dethi[currentCau].flag == false)
		{
			$('[name=sentence]')[currentCau].style.backgroundColor='#00B568';
			$('[name=sentence]')[currentCau].style.color='white';
		}
		
	});
		$('#chonB').click(function() {
			this.style.backgroundColor = '#00B568';
			this.style.color = 'white';
			$('#chonA')[0].style.backgroundColor = 'transparent';
			$('#chonA')[0].style.color = 'black';
			$('#chonC')[0].style.backgroundColor = 'transparent';
			$('#chonC')[0].style.color = 'black';
			$('#chonD')[0].style.backgroundColor = 'transparent';
			$('#chonD')[0].style.color = 'black';
			dethi[currentCau].cautraloi=1;
			if(dethi[currentCau].flag == false)
			{
				$('[name=sentence]')[currentCau].style.backgroundColor='#00B568';
				$('[name=sentence]')[currentCau].style.color='white';
			}
		});
		$('#chonC').click(function() {
			this.style.backgroundColor = '#00B568';
			this.style.color = 'white';
			$('#chonB')[0].style.backgroundColor = 'transparent';
			$('#chonB')[0].style.color = 'black';
			$('#chonA')[0].style.backgroundColor = 'transparent';
			$('#chonA')[0].style.color = 'black';
			$('#chonD')[0].style.backgroundColor = 'transparent';
			$('#chonD')[0].style.color = 'black';
			dethi[currentCau].cautraloi=2;
			if(dethi[currentCau].flag == false)
			{
				$('[name=sentence]')[currentCau].style.backgroundColor='#00B568';
				$('[name=sentence]')[currentCau].style.color='white';
			}
		});
		$('#chonD').click(function() {
			this.style.backgroundColor = '#00B568';
			this.style.color = 'white';
			$('#chonB')[0].style.backgroundColor = 'transparent';
			$('#chonB')[0].style.color = 'black';
			$('#chonC')[0].style.backgroundColor = 'transparent';
			$('#chonC')[0].style.color = 'black';
			$('#chonA')[0].style.backgroundColor = 'transparent';
			$('#chonC')[0].style.color = 'black';
			dethi[currentCau].cautraloi=3;
			if(dethi[currentCau].flag == false)
			{
				$('[name=sentence]')[currentCau].style.backgroundColor='#00B568';
				$('[name=sentence]')[currentCau].style.color='white';
			}
		});

	//flag
	$('#btnFlag').click(function(){
		
		if(dethi[currentCau].flag == false)
		{
			this.style.color = '#FF0000';
			dethi[currentCau].flag = true;
			$('[name=sentence]')[currentCau].style.backgroundColor='#FF0000';
			$('[name=sentence]')[currentCau].style.color='white';
		}
		else
		{
			this.style.color = 'black';
			if(dethi[currentCau].cautraloi > -1 )
			{
				dethi[currentCau].flag = false;
				$('[name=sentence]')[currentCau].style.backgroundColor='#00B568';
				$('[name=sentence]')[currentCau].style.color='white';
			}
			else
			{
				dethi[currentCau].flag = false;
				$('[name=sentence]')[currentCau].style.backgroundColor='transparent';
				$('[name=sentence]')[currentCau].style.color='black';
			}
			
		}
		
	})
}



if(pathname == '/OnThiTHPTQG/public/xemketqua')
{
	for(let i = 0; i < dethidalam.length; i++)
	{
		if(dethidalam[i].cautraloi == dethidalam[i].dapandung)
		{
			$('[name=sentence]')[i].style.backgroundColor='#00B568';
			$('[name=sentence]')[i].style.color='white';
		}
		else
		{
			$('[name=sentence]')[i].style.backgroundColor='#FF0000';
			$('[name=sentence]')[i].style.color='white';
		}


	}
}



	//next_cau
	$('#cau_next').click(function(){
		currentCau++;
		console.log('cur = ', currentCau);
		if(currentCau < dethi.length)
		{
			//currentCau++;
			console.log(currentCau);
			CauHoi();
		}
		
	})

	//next_cau
	$('#cau_prev').click(function(){
		if(currentCau > 0)
		{
			currentCau--;
			console.log(currentCau);
			CauHoi();
		}
		
	})

	$('[name=btnNop]').click(function(){
		let url = window.location.href;
		let string = (url.split('?'))[1];
		console.log(((string.split('&'))[0]));
		if(string != "" || string != null)
		{
			tendethi = (((string.split('&'))[0]).split('='))[1];
			mon = (((string.split('&'))[1]).split('='))[1];
		}
		//clearInterval(timeout);
		window.location.href=`/OnThiTHPTQG/public/ketqua?tendethi=${tendethi}&mon=${mon}`;
	})

	if(pathname != '/OnThiTHPTQG/public/tongon' && pathname != '/OnThiTHPTQG/public/thithu' && pathname != '/OnThiTHPTQG/public/dethimoinhat'
		&& pathname != '/OnThiTHPTQG/public/dethi' && pathname != '/OnThiTHPTQG/public/thionline'
		&& pathname != '/OnThiTHPTQG/public/ketqua'&& pathname != '/OnThiTHPTQG/public/xemketqua'
		&& pathname != '/OnThiTHPTQG/public/diendan'&& pathname != '/OnThiTHPTQG/public/lichsu' && pathname != '/OnThiTHPTQG/public/timkiem'
		&& pathname != '/OnThiTHPTQG/public/'
		)
	{
		let url = window.location.href;
		let string = (url.split('?'))[1];
		console.log(string);
		if(pathname != '/OnThiTHPTQG/public/dsdt' && pathname != '/OnThiTHPTQG/public/diendan')
		{
			if(string != "" || string != null)
			{
				loai = (((string.split('&'))[0]).split('='))[1];
				khoi = (((string.split('&'))[1]).split('='))[1];
				mon = (((string.split('&'))[2]).split('='))[1];
			}
		}
		else if (pathname == '/OnThiTHPTQG/public/dsdt')
		{
			if(string != "" || string != null)
			{
				mon = (((string.split('&'))[0]).split('='))[1];
			}
		}
		
	}
	
	
	if(pathname == '/OnThiTHPTQG/public/tongon' || pathname == '/OnThiTHPTQG/public/dsbh' || pathname == '/OnThiTHPTQG/public/baihoc')
	{
		$('#menu1').addClass("active");
	}
	else if(pathname == '/OnThiTHPTQG/public/thithu'|| pathname == '/OnThiTHPTQG/public/dsdt' || pathname == '/OnThiTHPTQG/public/dethimoinhat' 
		|| pathname == '/OnThiTHPTQG/public/thionline' || pathname == '/OnThiTHPTQG/public/ketqua' || pathname == '/OnThiTHPTQG/public/xemketqua'
		|| pathname == '/OnThiTHPTQG/public/dethi')
	{
		$('#menu2').addClass("active");
	}
	if(pathname == '/OnThiTHPTQG/public/diendan')
	{
		$('#menu3').addClass("active");
	}

	if(pathname == '/OnThiTHPTQG/public/dethi')
	{
		let url = window.location.href;
			let string = (url.split('?'))[1];
			console.log(((string.split('&'))[0]));
			if(string != "" || string != null)
			{
				mon = (((string.split('&'))[1]).split('='))[1];
			}
		if(mon == 'van')
		{
			$('#thingay')[0].style.display = 'none';
		}	
	}

	if(window.location.href=="http://localhost:8080/OnThiTHPTQG/public/diendan")
		{
			khoi="khoi12";
			mon="toan12";
		}

		if(window.location.href != "http://localhost:8080/OnThiTHPTQG/public/diendan" && pathname == '/OnThiTHPTQG/public/diendan')
		{
			let url = window.location.href;
			let string = (url.split('?'))[1];
			console.log(((string.split('&'))[0]));
			if(string != "" || string != null)
			{
				khoi = (((string.split('&'))[0]).split('='))[1];
				mon = (((string.split('&'))[1]).split('='))[1];
			}
		}



	$('#lythuyet').click(function()
	{
		loai = "lythuyet";
		$('#lythuyet')[0].style.backgroundColor = "#00B568";
		$('#lythuyet')[0].style.color = "white";

		$('#baitap')[0].style.backgroundColor = "transparent";
		$('#baitap')[0].style.color = "black";

		$('#meo')[0].style.backgroundColor = "transparent";
		$('#meo')[0].style.color = "black";

	})

	$('#baitap').click(function()
	{
		loai = "baitap";
		$('#baitap')[0].style.backgroundColor = "#00B568";
		$('#baitap')[0].style.color = "white";

		$('#lythuyet')[0].style.backgroundColor = "transparent";
		$('#lythuyet')[0].style.color = "black";

		$('#meo')[0].style.backgroundColor = "transparent";
		$('#meo')[0].style.color = "black";

	})

	$('#meo').click(function()
	{
		loai = "meo";
		$('#meo')[0].style.backgroundColor = "#00B568";
		$('#meo')[0].style.color = "white";

		$('#baitap')[0].style.backgroundColor = "transparent";
		$('#baitap')[0].style.color = "black";

		$('#lythuyet')[0].style.backgroundColor = "transparent";
		$('#lythuyet')[0].style.color = "black";

	})

	$('#khoi10').click(function()
	{
		khoi = "khoi10";
		$('#khoi10')[0].style.backgroundColor = "#00B568";
		$('#khoi10')[0].style.color = "white";

		$('#khoi11')[0].style.backgroundColor = "transparent";
		$('#khoi11')[0].style.color = "black";

		$('#khoi12')[0].style.backgroundColor = "transparent";
		$('#khoi12')[0].style.color = "black";

	})

	$('#khoi11').click(function()
	{
		khoi = "khoi11";
		$('#khoi11')[0].style.backgroundColor = "#00B568";
		$('#khoi11')[0].style.color = "white";

		$('#khoi10')[0].style.backgroundColor = "transparent";
		$('#khoi10')[0].style.color = "black";

		$('#khoi12')[0].style.backgroundColor = "transparent";
		$('#khoi12')[0].style.color = "black";

	})

	$('#khoi12').click(function()
	{
		khoi = "khoi12";
		$('#khoi12')[0].style.backgroundColor = "#00B568";
		$('#khoi12')[0].style.color = "white";

		$('#khoi10')[0].style.backgroundColor = "transparent";
		$('#khoi10')[0].style.color = "black";

		$('#khoi11')[0].style.backgroundColor = "transparent";
		$('#khoi11')[0].style.color = "black";

	})

	$('#toan').click(function()
	{
		mon = "toan";
		$('#toan')[0].style.backgroundColor = "#00B568";
		$('#toan')[0].style.color = "white";

		$('#ly')[0].style.backgroundColor = "transparent";
		$('#ly')[0].style.color = "black";

		$('#hoa')[0].style.backgroundColor = "transparent";
		$('#hoa')[0].style.color = "black";

		$('#sinh')[0].style.backgroundColor = "transparent";
		$('#sinh')[0].style.color = "black";

		$('#su')[0].style.backgroundColor = "transparent";
		$('#su')[0].style.color = "black";

		$('#dia')[0].style.backgroundColor = "transparent";
		$('#dia')[0].style.color = "black";

		$('#anh')[0].style.backgroundColor = "transparent";
		$('#anh')[0].style.color = "black";

		$('#van')[0].style.backgroundColor = "transparent";
		$('#van')[0].style.color = "black";

		$('#gdcd')[0].style.backgroundColor = "transparent";
		$('#gdcd')[0].style.color = "black";

	})

	$('#ly').click(function()
	{
		mon = "ly";
		$('#ly')[0].style.backgroundColor = "#00B568";
		$('#ly')[0].style.color = "white";

		$('#toan')[0].style.backgroundColor = "transparent";
		$('#toan')[0].style.color = "black";

		$('#hoa')[0].style.backgroundColor = "transparent";
		$('#hoa')[0].style.color = "black";

		$('#sinh')[0].style.backgroundColor = "transparent";
		$('#sinh')[0].style.color = "black";

		$('#su')[0].style.backgroundColor = "transparent";
		$('#su')[0].style.color = "black";

		$('#dia')[0].style.backgroundColor = "transparent";
		$('#dia')[0].style.color = "black";

		$('#anh')[0].style.backgroundColor = "transparent";
		$('#anh')[0].style.color = "black";

		$('#van')[0].style.backgroundColor = "transparent";
		$('#van')[0].style.color = "black";

		$('#gdcd')[0].style.backgroundColor = "transparent";
		$('#gdcd')[0].style.color = "black";

	})


	$('#hoa').click(function()
	{
		mon = "hoa";
		$('#hoa')[0].style.backgroundColor = "#00B568";
		$('#hoa')[0].style.color = "white";

		$('#ly')[0].style.backgroundColor = "transparent";
		$('#ly')[0].style.color = "black";

		$('#toan')[0].style.backgroundColor = "transparent";
		$('#toan')[0].style.color = "black";

		$('#sinh')[0].style.backgroundColor = "transparent";
		$('#sinh')[0].style.color = "black";

		$('#su')[0].style.backgroundColor = "transparent";
		$('#su')[0].style.color = "black";

		$('#dia')[0].style.backgroundColor = "transparent";
		$('#dia')[0].style.color = "black";

		$('#anh')[0].style.backgroundColor = "transparent";
		$('#anh')[0].style.color = "black";

		$('#van')[0].style.backgroundColor = "transparent";
		$('#van')[0].style.color = "black";

		$('#gdcd')[0].style.backgroundColor = "transparent";
		$('#gdcd')[0].style.color = "black";

	})

	$('#sinh').click(function()
	{
		mon = "sinh";
		$('#sinh')[0].style.backgroundColor = "#00B568";
		$('#sinh')[0].style.color = "white";

		$('#ly')[0].style.backgroundColor = "transparent";
		$('#ly')[0].style.color = "black";

		$('#toan')[0].style.backgroundColor = "transparent";
		$('#toan')[0].style.color = "black";

		$('#hoa')[0].style.backgroundColor = "transparent";
		$('#hoa')[0].style.color = "black";

		$('#su')[0].style.backgroundColor = "transparent";
		$('#su')[0].style.color = "black";

		$('#dia')[0].style.backgroundColor = "transparent";
		$('#dia')[0].style.color = "black";

		$('#anh')[0].style.backgroundColor = "transparent";
		$('#anh')[0].style.color = "black";

		$('#van')[0].style.backgroundColor = "transparent";
		$('#van')[0].style.color = "black";

		$('#gdcd')[0].style.backgroundColor = "transparent";
		$('#gdcd')[0].style.color = "black";

	})

	$('#su').click(function()
	{
		mon = "su";
		$('#su')[0].style.backgroundColor = "#00B568";
		$('#su')[0].style.color = "white";

		$('#ly')[0].style.backgroundColor = "transparent";
		$('#ly')[0].style.color = "black";

		$('#toan')[0].style.backgroundColor = "transparent";
		$('#toan')[0].style.color = "black";

		$('#sinh')[0].style.backgroundColor = "transparent";
		$('#sinh')[0].style.color = "black";

		$('#hoa')[0].style.backgroundColor = "transparent";
		$('#hoa')[0].style.color = "black";

		$('#dia')[0].style.backgroundColor = "transparent";
		$('#dia')[0].style.color = "black";

		$('#anh')[0].style.backgroundColor = "transparent";
		$('#anh')[0].style.color = "black";

		$('#van')[0].style.backgroundColor = "transparent";
		$('#van')[0].style.color = "black";

		$('#gdcd')[0].style.backgroundColor = "transparent";
		$('#gdcd')[0].style.color = "black";

	})
	
	$('#dia').click(function()
	{
		mon = "dia";
		$('#dia')[0].style.backgroundColor = "#00B568";
		$('#dia')[0].style.color = "white";

		$('#ly')[0].style.backgroundColor = "transparent";
		$('#ly')[0].style.color = "black";

		$('#toan')[0].style.backgroundColor = "transparent";
		$('#toan')[0].style.color = "black";

		$('#sinh')[0].style.backgroundColor = "transparent";
		$('#sinh')[0].style.color = "black";

		$('#su')[0].style.backgroundColor = "transparent";
		$('#su')[0].style.color = "black";

		$('#hoa')[0].style.backgroundColor = "transparent";
		$('#hoa')[0].style.color = "black";

		$('#anh')[0].style.backgroundColor = "transparent";
		$('#anh')[0].style.color = "black";

		$('#van')[0].style.backgroundColor = "transparent";
		$('#van')[0].style.color = "black";

		$('#gdcd')[0].style.backgroundColor = "transparent";
		$('#gdcd')[0].style.color = "black";

	})
	
	$('#anh').click(function()
	{
		mon = "anh";
		$('#anh')[0].style.backgroundColor = "#00B568";
		$('#anh')[0].style.color = "white";

		$('#ly')[0].style.backgroundColor = "transparent";
		$('#ly')[0].style.color = "black";

		$('#toan')[0].style.backgroundColor = "transparent";
		$('#toan')[0].style.color = "black";

		$('#sinh')[0].style.backgroundColor = "transparent";
		$('#sinh')[0].style.color = "black";

		$('#su')[0].style.backgroundColor = "transparent";
		$('#su')[0].style.color = "black";

		$('#dia')[0].style.backgroundColor = "transparent";
		$('#dia')[0].style.color = "black";

		$('#hoa')[0].style.backgroundColor = "transparent";
		$('#hoa')[0].style.color = "black";

		$('#van')[0].style.backgroundColor = "transparent";
		$('#van')[0].style.color = "black";

		$('#gdcd')[0].style.backgroundColor = "transparent";
		$('#gdcd')[0].style.color = "black";

	})

	$('#van').click(function()
	{
		mon = "van";
		$('#van')[0].style.backgroundColor = "#00B568";
		$('#van')[0].style.color = "white";

		$('#ly')[0].style.backgroundColor = "transparent";
		$('#ly')[0].style.color = "black";

		$('#toan')[0].style.backgroundColor = "transparent";
		$('#toan')[0].style.color = "black";

		$('#sinh')[0].style.backgroundColor = "transparent";
		$('#sinh')[0].style.color = "black";

		$('#su')[0].style.backgroundColor = "transparent";
		$('#su')[0].style.color = "black";

		$('#dia')[0].style.backgroundColor = "transparent";
		$('#dia')[0].style.color = "black";

		$('#anh')[0].style.backgroundColor = "transparent";
		$('#anh')[0].style.color = "black";

		$('#hoa')[0].style.backgroundColor = "transparent";
		$('#hoa')[0].style.color = "black";

		$('#gdcd')[0].style.backgroundColor = "transparent";
		$('#gdcd')[0].style.color = "black";

	})

	$('#gdcd').click(function()
	{
		mon = "gdcd";
		$('#gdcd')[0].style.backgroundColor = "#00B568";
		$('#gdcd')[0].style.color = "white";

		$('#ly')[0].style.backgroundColor = "transparent";
		$('#ly')[0].style.color = "black";

		$('#toan')[0].style.backgroundColor = "transparent";
		$('#toan')[0].style.color = "black";

		$('#sinh')[0].style.backgroundColor = "transparent";
		$('#sinh')[0].style.color = "black";

		$('#su')[0].style.backgroundColor = "transparent";
		$('#su')[0].style.color = "black";

		$('#dia')[0].style.backgroundColor = "transparent";
		$('#dia')[0].style.color = "black";

		$('#anh')[0].style.backgroundColor = "transparent";
		$('#anh')[0].style.color = "black";

		$('#van')[0].style.backgroundColor = "transparent";
		$('#van')[0].style.color = "black";

		$('#hoa')[0].style.backgroundColor = "transparent";
		$('#hoa')[0].style.color = "black";

	})

	$('#btnOK').click(function()
	{
		if(pathname == '/OnThiTHPTQG/public/tongon' || pathname == '/OnThiTHPTQG/public/baihoc')
		{
			window.location.href=`/OnThiTHPTQG/public/dsbh?loai=${loai}&khoi=${khoi}&mon=${mon}`;
		}
		else if(pathname == '/OnThiTHPTQG/public/thithu')
		{
			window.location.href=`/OnThiTHPTQG/public/dsdt?mon=${mon}`;
		}
		
	})

	$('#btnOK_dsbh').click(function()
	{
		window.location.href=`/OnThiTHPTQG/public/dsbh?loai=${loai}&khoi=${khoi}&mon=${mon}`;
	})

	$('#btnOK_dsdt').click(function()
	{
		window.location.href=`/OnThiTHPTQG/public/dsdt?mon=${mon}`;
	})

	$('#btnOK_ketqua').click(function()
	{
		window.location.href=`/OnThiTHPTQG/public/dsdt?mon=${mon}`;
	})

	$('#btnOK_diendan').click(function()
	{
		

		
			console.log(khoi);
			console.log(mon);
			window.location.href=`/OnThiTHPTQG/public/diendan?khoi=${khoi}&mon=${mon}`;
		
	})

	$('#btnXemKetQua').click(function()
	{
		let url = window.location.href;
		let string = (url.split('?'))[1];
		console.log(((string.split('&'))[0]));
		if(string != "" || string != null)
		{
			tendethi = (((string.split('&'))[0]).split('='))[1];
			mon = (((string.split('&'))[1]).split('='))[1];
		}
		window.location.href=`/OnThiTHPTQG/public/xemketqua?tendethi=${tendethi}&mon=${mon}`;
	})

	$('#btnThiLai').click(function()
	{
		let url = window.location.href;
		let string = (url.split('?'))[1];
		console.log(((string.split('&'))[0]));
		if(string != "" || string != null)
		{
			tendethi = (((string.split('&'))[0]).split('='))[1];
			mon = (((string.split('&'))[1]).split('='))[1];
		}
		window.location.href=`/OnThiTHPTQG/public/thionline?tendethi=${tendethi}&mon=${mon}`;
	})

	$('[name=baihoc]').click(function(e)
	{
		
		if(pathname == '/OnThiTHPTQG/public/baihoc')
		{
			baihoc = ((e.target.innerText).split('. '))[1];
		}
		else
		{
			baihoc = e.target.innerText;
		}

		for(let i =0; i<baihoc_toan.length; i++)
		{
			if(baihoc_toan.indexOf(baihoc) == i)
			{
				next = baihoc_toan[i+1];
				prev = baihoc_toan[i-1];
				if(i == baihoc_toan.length - 1)
				{
					next=" ";
				}
				else if(i == 0)
				{
					prev=" ";
				}
			}
		}
		
		
		window.location.href=`/OnThiTHPTQG/public/baihoc?loai=${loai}&khoi=${khoi}&mon=${mon}&baihoc=${baihoc}&dsbh=${baihoc_toan}&next=${next}&prev=${prev}`;
	})

	$('#next').click(function()
	{
		if(pathname == '/OnThiTHPTQG/public/baihoc')
		{
			//let url = window.location.href;
			//let string = (url.split('?'))[1];
			//if(string != "" || string != null)
			//{
				//baihoc = (((string.split('&'))[5]).split('='))[1];
				baihoc=$('#next_name')[0].innerText;
			//}
		}
		
		for(let i =0; i<baihoc_toan.length; i++)
		{
			if(baihoc_toan.indexOf(baihoc) == i)
			{
				next = baihoc_toan[i+1];
				prev = baihoc_toan[i-1];
				if(i == baihoc_toan.length - 1)
				{
					next=" ";
				}
				else if(i == 0)
				{
					prev=" ";
				}
			}
		}
		//console.log(baihoc_toan);
		//console.log(baihoc);
		//console.log(next);
		//console.log(prev);
		window.location.href=`/OnThiTHPTQG/public/baihoc?loai=${loai}&khoi=${khoi}&mon=${mon}&baihoc=${baihoc}&dsbh=${baihoc_toan}&next=${next}&prev=${prev}`;
	})

	$('#prev').click(function()
	{
		if(pathname == '/OnThiTHPTQG/public/baihoc')
		{
			baihoc=$('#prev_name')[0].innerText;
		}
		
		for(let i =0; i<baihoc_toan.length; i++)
		{
			if(baihoc_toan.indexOf(baihoc) == i)
			{
				next = baihoc_toan[i+1];
				prev = baihoc_toan[i-1];
				if(i == baihoc_toan.length - 1)
				{
					next=" ";
				}
				else if(i == 0)
				{
					prev=" ";
				}
			}
		}
		window.location.href=`/OnThiTHPTQG/public/baihoc?loai=${loai}&khoi=${khoi}&mon=${mon}&baihoc=${baihoc}&dsbh=${baihoc_toan}&next=${next}&prev=${prev}`;
	})

	$('[name=dethi').click(function(e)
	{
		if(pathname != '/OnThiTHPTQG/public/lichsu')
		{
			let tendethi = e.target.innerHTML;
			if(pathname != '/OnThiTHPTQG/public/dsdt' && pathname != '/OnThiTHPTQG/public/dethi')
			{
				mon="";
			}
			else if(pathname == '/OnThiTHPTQG/public/dsdt')
			{
				let url = window.location.href;
				let string = (url.split('?'))[1];
				console.log(((string.split('&'))[0]));
				if(string != "" || string != null)
				{
					mon = (((string.split('&'))[0]).split('='))[1];
				}
			}
			else if(pathname == '/OnThiTHPTQG/public/dethi')
			{
				let url = window.location.href;
				let string = (url.split('?'))[1];
				console.log(((string.split('&'))[0]));
				if(string != "" || string != null)
				{
					mon = (((string.split('&'))[1]).split('='))[1];
				}
			}
		window.location.href=`/OnThiTHPTQG/public/dethi?tendethi=${tendethi}&mon=${mon}`;
		}
		else
		{
			let tendethi = e.target.innerHTML;
			
		
			window.location.href=`/OnThiTHPTQG/public/ketqua?tendethi=${tendethi}&mon=${mon}`;
		}
		
	});

	$('#thingay').click(function()
	{
		let url = window.location.href;
		let string = (url.split('?'))[1];
		console.log(((string.split('&'))[0]));
		if(string != "" || string != null)
		{
			tendethi = (((string.split('&'))[0]).split('='))[1];
			mon = (((string.split('&'))[1]).split('='))[1];
		}
		window.location.href=`/OnThiTHPTQG/public/thionline?tendethi=${tendethi}&mon=${mon}`;
	})

	var thoigianbandau = '90:00';
	var timeout = setInterval(function()
	{
		let a = thoigianbandau.split(':');
		let phut = parseInt(a[0], 10);
		let giay = parseInt(a[1], 10);
		if(giay > 0)
		{
			giay--;
		}
		else
		{
			if(phut > 0)
			{
				phut--;
				giay = 59;
			}
			else
			{
				let url = window.location.href;
				let string = (url.split('?'))[1];
				console.log(((string.split('&'))[0]));
				if(string != "" || string != null)
				{
					tendethi = (((string.split('&'))[0]).split('='))[1];
					mon = (((string.split('&'))[1]).split('='))[1];
				}
				clearInterval(timeout);
				window.location.href=`/OnThiTHPTQG/public/ketqua?tendethi=${tendethi}&mon=${mon}`;
			}
		}
		phut=phut < 10 ? ('0' + phut):phut;
		giay=giay<10?('0'+giay):giay
		thoigianbandau= phut + ':' + giay;
		$('#thoigian').text(thoigianbandau);
		
		//console.log('time =', phut + ":" + giay);

	},1000)

	$('#btnDangBai').click(function(){
		$('#example')[0].style.display = 'block';
		$("#baidang").val("")
        return false;
	})

	$('#btnLike').click(function(){
		$('#btnUnLike')[0].style.display = 'block';
		$('#btnLike')[0].style.display = 'none';
		$('#numberLike')[0].innerText = '1';
	})

	$('#btnUnLike').click(function(){
		$('#btnUnLike')[0].style.display = 'none';
		$('#btnLike')[0].style.display = 'block';
		$('#numberLike')[0].innerText = '0';
	})

	$('#labelThich').click(function(){
		console.log('vo');
		if($('#labelThich')[0].style.color == "rgb(0, 93, 165)")
		{
			$('#labelThich')[0].style.color = "rgb(0, 181, 104)";
			$('#labelThich')[0].style.fontWeight = '600';
		}
		else
		{
			$('#labelThich')[0].style.color = "rgb(0, 93, 165)";
			$('#labelThich')[0].style.fontWeight = '500';
		}
	})

	$('#labelThich1').click(function(){
		console.log('vo');
		if($('#labelThich1')[0].style.color == "rgb(0, 93, 165)")
		{
			$('#labelThich1')[0].style.color = "rgb(0, 181, 104)";
			$('#labelThich1')[0].style.fontWeight = '600';
		}
		else
		{
			$('#labelThich1')[0].style.color = "rgb(0, 93, 165)";
			$('#labelThich1')[0].style.fontWeight = '500';
		}
	})

	$('#labelThich2').click(function(){
		console.log('vo');
		if($('#labelThich2')[0].style.color == "rgb(0, 93, 165)")
		{
			$('#labelThich2')[0].style.color = "rgb(0, 181, 104)";
			$('#labelThich2')[0].style.fontWeight = '600';
		}
		else
		{
			$('#labelThich2')[0].style.color = "rgb(0, 93, 165)";
			$('#labelThich2')[0].style.fontWeight = '500';
		}
	})

	$('#labelThich3').click(function(){
		console.log('vo');
		if($('#labelThich3')[0].style.color == "rgb(0, 93, 165)")
		{
			$('#labelThich3')[0].style.color = "rgb(0, 181, 104)";
			$('#labelThich3')[0].style.fontWeight = '600';
		}
		else
		{
			$('#labelThich3')[0].style.color = "rgb(0, 93, 165)";
			$('#labelThich3')[0].style.fontWeight = '500';
		}
	})

	$('#labelTraLoi').click(function(){
		console.log('vo');
		$('#mycommentcon')[0].style.display = 'flex';
	})

	var numComment=0;
	var numCommentCha=0;
	var numCommentCon=0;

	$('#comment_example').on('keypress',function(e) {
		if(e.which == 13) {
			
			numComment++;
			numCommentCha++;
        	//$('#comment_example').html('');
        	if(numCommentCha == 1)
			{
				$('#mycomment')[0].style.display = 'block';
			}
			else if(numCommentCha == 2)
			{
				$('#mycomment')[0].style.display = 'block';
				$('#mycomment1')[0].style.display = 'block';
			}
        	var msg = $("#comment_example").val().replace(/\n/g, "");
        	console.log(numComment);
        	$("#comment_example").val("");
        	$("#numberComment")[0].innerText = numComment + '';
        	return false;
        }

    });

    $('#comment_example1').on('keypress',function(e) {
		if(e.which == 13) {
			numCommentCon++;
			numComment++;
			
			if(numCommentCon == 1)
			{
				$('#comment_con')[0].style.display = 'block';
			}
			else if(numCommentCon == 2)
			{
				$('#comment_con')[0].style.display = 'none';
				$('#comment_con1')[0].style.display = 'block';
				$('#xemphanhoi')[0].style.display='block';
			}
        	//$('#comment_example').html('');
        	var msg = $("#comment_example1").val().replace(/\n/g, "");

        	console.log(numComment);
        	$("#numberComment")[0].innerText = numComment + '';
        	$("#comment_example1").val("");
        	return false;
        }

    });

    $('#xemphanhoi').click(function(e) {
		
		$('#comment_con')[0].style.display = 'block';
		$('#xemphanhoi')[0].style.display = 'none';

    });

    $('#xemphanhoitruoc').click(function(e) {
		
		$('#comment_hidden')[0].style.display = 'block';
		$('#xemphanhoitruoc')[0].style.display ='none';

    });
});