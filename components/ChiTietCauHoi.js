import React, { Component } from 'react';
import { View, TouchableOpacity, ActivityIndicator, Alert } from 'react-native';
import Icon from 'react-native-vector-icons/Ionicons';
import styles from './styles';
import Modal from 'react-native-modalbox';
import { Text, Footer, FooterTab, Button } from 'native-base';

export default class ChiTietCauHoi extends Component {
    constructor(props) {
        super(props);
        this.state = {
            currentQuestion: 0,
            answerSheet: new Array(this.props.navigation.state.params.cauHoi.length),
            trangThai: 0, //0: đang làm, 1: đợi xử lý, 2: có kết quả, 3:xem đáp án
            time: this.props.navigation.state.params.thoigian
        };

        this.deThi = this.props.navigation.state.params.cauHoi;

        this.timeout = setInterval(() => {
            let arr = this.state.time.split(":");
            var phut = parseInt(arr[0], 10);
            var giay = parseInt(arr[1], 10);
            if (giay <= 0) {
                if (phut > 0) {
                    phut--;
                    giay = 59;
                } else {
                    clearInterval(this.timeout);
                    Alert.alert("Thông báo", "Hết thời gian làm bài!", [
                        {
                            text: 'Nộp bài', onPress: () => {
                                this.setState({
                                    trangThai: 1
                                });
                                this.refs.modalWaiting.open();
                                this.chamDiem();
                            }
                        },
                    ],
                        { cancelable: false });
                }
            } else {
                giay--;
            }

            phut = phut < 10 ? "0" + phut : phut;
            giay = giay < 10 ? "0" + giay : giay;

            this.setState({
                time: phut + ":" + giay
            });
        }, 1000);
    }

    renderDanhSach = () => {
        return (this.deThi.map((val, inx) => (
            <View key={inx} style={{
                flexBasis: '20%',
                alignItems: 'center',
                padding: 10,
                justifyContent: 'center',
            }}>
                {this.state.trangThai == 3 ?
                    <TouchableOpacity style={[{
                        alignItems: 'center',
                        justifyContent: 'center',
                        width: 50,
                        height: 30
                    }, this.state.answerSheet[inx] == this.deThi[inx].dapan ? styles.active_question : { backgroundColor: 'red' }]}
                        onPress={() => {
                            this.setState({
                                currentQuestion: inx
                            });
                        }}>
                        <Text style={{ color: 'white', textAlign: 'center' }}>{inx + 1}</Text>
                    </TouchableOpacity>
                    :
                    <TouchableOpacity style={[{
                        borderColor: '#00817C',
                        borderWidth: 1,
                        alignItems: 'center',
                        justifyContent: 'center',
                        width: 50,
                        height: 30
                    }, this.state.answerSheet[inx] ? styles.active_question : ""]}
                        onPress={() => {
                            this.setState({
                                currentQuestion: inx
                            });
                        }}>
                        <Text style={this.state.answerSheet[inx] ? { color: 'white', textAlign: 'center' } : { color: '#00817C', textAlign: 'center' }}>{inx + 1}</Text>
                    </TouchableOpacity>}
            </View>
        )));

    }

    chooseAnswer = (answer) => {
        let answerSheet = this.state.answerSheet;
        for (let i = 0; i < answerSheet.length; i++) {
            if (i == this.state.currentQuestion) {
                answerSheet[i] = answer;
            }
        };
        this.setState({ answerSheet });
    }

    chamDiem = () => {
        setTimeout(
            () => {
                this.refs.modalWaiting.close();
                this.setState({ trangThai: 2 });
                this.refs.modalResult.open();
            },
            2000);
    }

    render() {
        return (
            <View style={{ flex: 1 }}>
                <View style={[styles.header]}>
                    <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                        <View style={{ flex: 6, flexDirection: 'row' }}>
                            <Icon name="md-arrow-back" size={25} />
                            <Text style={{ marginLeft: 15, fontSize: 20 }}>Câu {this.state.currentQuestion + 1}</Text>
                        </View>
                        <View style={{ flex: 4, flexDirection: 'row-reverse' }}>
                            <Text style={{ color: '#00817C', fontSize: 20 }}>{this.state.time}</Text>
                        </View>
                    </View>
                </View>
                <View style={[styles.header]}>
                    <Text>
                        {this.deThi[this.state.currentQuestion].noidung}
                    </Text>
                    <View style={{ marginTop: 15, flexWrap: 'wrap' }}>
                        <TouchableOpacity disabled={this.state.trangThai == 3} style={{ flexDirection: 'row', marginTop: 30, alignItems: 'center', flexWrap: 'wrap' }}
                            onPress={() => {
                                this.chooseAnswer('A');
                            }}>
                            <View style={{
                                flex: 1
                            }}>
                                <View style={[{
                                    elevation: 3,
                                    borderRadius: 180,
                                    width: 30,
                                    height: 30,
                                    alignItems: 'center',
                                    justifyContent: 'center',
                                    marginRight: 15,

                                }, this.state.answerSheet[this.state.currentQuestion] == 'A' ? { backgroundColor: '#00817C' } : (this.deThi[this.state.currentQuestion].dapan == 'A' && this.state.trangThai == 3 ? { backgroundColor: 'red', } : { backgroundColor: 'white', })]}>
                                    <Text style={[{ textAlign: 'center' }, this.state.answerSheet[this.state.currentQuestion] == 'A' || this.deThi[this.state.currentQuestion].dapan == 'A' && this.state.trangThai == 3 ? { color: 'white' } : { color: 'black' }]}>A</Text>
                                </View>
                            </View>

                            <View style={{
                                flexDirection: 'row',
                                flexWrap: 'wrap',
                                flex: 9
                            }}>
                                <Text >{this.deThi[this.state.currentQuestion].traloi.A}</Text>
                            </View>
                        </TouchableOpacity>
                        <TouchableOpacity disabled={this.state.trangThai == 3} style={{ flexDirection: 'row', marginTop: 30, alignItems: 'center', flexWrap: 'wrap' }}
                            onPress={() => {
                                this.chooseAnswer('B');
                            }}>
                            <View style={{
                                flex: 1
                            }}>
                                <View style={[{
                                    elevation: 3,
                                    borderRadius: 180,
                                    width: 30,
                                    height: 30,
                                    alignItems: 'center',
                                    justifyContent: 'center',
                                    marginRight: 15
                                }, this.state.answerSheet[this.state.currentQuestion] == 'B' ? { backgroundColor: '#00817C' } : this.deThi[this.state.currentQuestion].dapan == 'B' && this.state.trangThai == 3 ? { backgroundColor: 'red', } : { backgroundColor: 'white', }]}>
                                    <Text style={[{ alignItems: 'center' }, this.state.answerSheet[this.state.currentQuestion] == 'B' || this.deThi[this.state.currentQuestion].dapan == 'B' && this.state.trangThai == 3 ? { color: 'white' } : { color: 'black' }]}>B</Text>
                                </View>
                            </View>

                            <View style={{
                                flexDirection: 'row',
                                flexWrap: 'wrap',
                                flex: 9
                            }}>
                                <Text>{this.deThi[this.state.currentQuestion].traloi.B}</Text>
                            </View>

                        </TouchableOpacity>
                        <TouchableOpacity disabled={this.state.trangThai == 3} style={{ flexDirection: 'row', marginTop: 30, alignItems: 'center', flexWrap: 'wrap' }}
                            onPress={() => {
                                this.chooseAnswer('C');
                            }}>
                            <View style={{
                                flex: 1
                            }}>
                                <View style={[{
                                    elevation: 3,
                                    borderRadius: 180,
                                    width: 30,
                                    height: 30,
                                    alignItems: 'center',
                                    justifyContent: 'center',
                                    marginRight: 15
                                }, this.state.answerSheet[this.state.currentQuestion] == 'C' ? { backgroundColor: '#00817C' } : this.deThi[this.state.currentQuestion].dapan == 'C' && this.state.trangThai == 3 ? { backgroundColor: 'red', } : { backgroundColor: 'white', }]}>
                                    <Text style={[{ alignItems: 'center' }, this.state.answerSheet[this.state.currentQuestion] == 'C' || this.deThi[this.state.currentQuestion].dapan == 'C' && this.state.trangThai == 3 ? { color: 'white' } : { color: 'black' }]}>C</Text>
                                </View>
                            </View>

                            <View style={{
                                flexDirection: 'row',
                                flexWrap: 'wrap',
                                flex: 9
                            }}>
                                <Text>{this.deThi[this.state.currentQuestion].traloi.C}</Text>
                            </View>

                        </TouchableOpacity>
                        <TouchableOpacity disabled={this.state.trangThai == 3} style={{ flexDirection: 'row', marginTop: 30, alignItems: 'center', flexWrap: 'wrap' }}
                            onPress={() => {
                                this.chooseAnswer('D');
                            }}>
                            <View style={{
                                flex: 1
                            }}>
                                <View style={[{
                                    elevation: 3,
                                    borderRadius: 180,
                                    width: 30,
                                    height: 30,
                                    alignItems: 'center',
                                    justifyContent: 'center',
                                    marginRight: 15
                                }, this.state.answerSheet[this.state.currentQuestion] == 'D' ? { backgroundColor: '#00817C' } : this.deThi[this.state.currentQuestion].dapan == 'D' && this.state.trangThai == 3 ? { backgroundColor: 'red', } : { backgroundColor: 'white', }]}>
                                    <Text style={[{ alignItems: 'center' }, this.state.answerSheet[this.state.currentQuestion] == 'D' || this.deThi[this.state.currentQuestion].dapan == 'D' && this.state.trangThai == 3 ? { color: 'white' } : { color: 'black' }]}>D</Text>
                                </View>
                            </View>

                            <View style={{
                                flexDirection: 'row',
                                flexWrap: 'wrap',
                                flex: 9
                            }}>
                                <Text>{this.deThi[this.state.currentQuestion].traloi.D}</Text>
                            </View>

                        </TouchableOpacity>
                    </View>
                    {this.state.trangThai == 3 && <View style={{ marginTop: 15 }}>
                        <Text>
                            <Text style={{ color: '#00817C' }}>Đáp án: </Text>
                            <Text>{this.deThi[this.state.currentQuestion].dapan}</Text>
                        </Text>
                        <Text style={{ color: '#00817C' }}>Giải thích: <Text>{this.deThi[this.state.currentQuestion].giaithich}</Text> </Text>

                    </View>}
                </View>
                <View style={{
                    position: 'absolute',
                    bottom: 5,
                    left: 0,
                    right: 0,
                    flexDirection: 'row',
                    padding: 15
                }}>
                    <View style={{ flex: 3 }}>
                        {this.state.currentQuestion > 0 && <TouchableOpacity style={{ alignItems: 'center', flexDirection: 'row' }}
                            onPress={() => {
                                this.setState({
                                    currentQuestion: this.state.currentQuestion - 1
                                })
                            }}>
                            <Icon name="md-arrow-back" size={25} color="#00817C" />
                        </TouchableOpacity>}
                    </View>
                    <TouchableOpacity style={{ flex: 4, alignItems: 'center', justifyContent: 'center' }}
                        onPress={() => {
                            this.refs.modal.open();
                        }}>
                        <Icon name="ios-arrow-up" size={25} color="#00817C" />
                    </TouchableOpacity>
                    <View style={{ flex: 3, }}>
                        {this.state.currentQuestion < this.deThi.length - 1 && <TouchableOpacity style={{ alignItems: 'center', flexDirection: 'row-reverse' }}
                            onPress={() => {
                                this.setState({
                                    currentQuestion: this.state.currentQuestion + 1
                                })
                            }}>
                            <Icon name="md-arrow-forward" size={25} color="#00817C" />
                        </TouchableOpacity>}
                    </View>



                </View>
                <Modal
                    ref={'modal'}
                    style={[{
                        height: null,
                        padding: 10,
                    }]}
                    position='bottom'
                    backdrop={true}
                    coverScreen={true}>
                    <View>
                        <TouchableOpacity 
                        onPress={() => {
                            this.refs.modal.close();
                        }}
                        style={{ alignItems: 'center', justifyContent: 'center' }}>
                            <Icon name="ios-arrow-down" size={25} color="#00817C" />
                        </TouchableOpacity>
                        <View style={{ flexDirection: 'row', flexWrap: 'wrap' }}>
                            {this.renderDanhSach()}
                        </View>
                        <View style={{ flexDirection: 'row-reverse', marginTop: 10 }}>
                            {this.state.trangThai == 3 ?
                                <TouchableOpacity
                                    style={{
                                        padding: 5,
                                        backgroundColor: "#00817C"
                                    }}
                                    onPress={() => {
                                        this.refs.modal.close();
                                        this.props.navigation.goBack();
                                    }}>
                                    <Text style={{ color: 'white' }}>TRỞ VỀ</Text>
                                </TouchableOpacity>
                                : <TouchableOpacity
                                    style={{
                                        padding: 5,
                                        backgroundColor: "#00817C"
                                    }}
                                    onPress={() => {
                                        clearInterval(this.timeout);
                                        this.refs.modal.close();
                                        this.setState({
                                            trangThai: 1
                                        });
                                        this.refs.modalWaiting.open();
                                        this.chamDiem();
                                    }}>
                                    <Text style={{ color: 'white' }}>NỘP BÀI</Text>
                                </TouchableOpacity>}
                        </View>
                    </View>
                </Modal>
                <Modal
                    backdropPressToClose={false}
                    ref={'modalWaiting'}
                    style={{
                        height: null,
                        padding: 10
                    }}
                    position='bottom'
                    backdrop={true}
                    coverScreen={true}>
                    <View>
                        <ActivityIndicator size="large" color="#00817C" />
                    </View>
                </Modal>
                <Modal
                    backdropPressToClose={false}
                    ref={'modalResult'}
                    style={{
                        height: null,
                        padding: 10
                    }}
                    position='bottom'
                    backdrop={true}
                    coverScreen={true}>
                    <View>
                        <View style={{ alignItems: 'center', justifyContent: 'center' }}>
                            <View>
                                <Icon name="md-school" color="#00817C" size={40} />
                            </View>
                            <View style={{
                                flexDirection: 'row',
                                margin: 10,
                                alignItems: 'center', justifyContent: 'center',
                            }}>
                                <View style={{ flex: 2 }}>

                                </View>
                                <View style={{ flex: 6 }}>
                                    <Text style={{ textAlign: 'center' }}>Chúc mừng bạn đã hoàn thành bài thi với kết quả</Text>
                                </View>
                                <View style={{ flex: 2 }}>

                                </View>
                            </View>
                            <View style={{ padding: 10 }}>
                                <Text style={{ fontSize: 30, fontWeight: 'bold' }}><Text style={{ fontSize: 30, fontWeight: 'bold', color: "#00817C" }}>30</Text>/40</Text>
                            </View>
                            <View style={{ padding: 10 }}>
                                <Text style={{ color: "red" }}>Thứ hạng của bạn: 10/30</Text>
                            </View>
                        </View>
                        <View style={{ flexDirection: 'row', justifyContent: 'space-between', marginTop: 10, padding: 20 }}>
                            <TouchableOpacity
                                onPress={() => {
                                    this.refs.modalResult.close();
                                    this.props.navigation.goBack();
                                }}>
                                <Text style={{ color: "#00817C" }}>TRỞ VỀ</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                onPress={() => {
                                    this.refs.modalResult.close();
                                    this.setState({
                                        currentQuestion: 0,
                                        trangThai: 3
                                    });
                                }}>
                                <Text style={{ color: "#00817C" }}>XEM ĐÁP ÁN</Text>
                            </TouchableOpacity>
                        </View>
                    </View>
                </Modal>
            </View>
        );
    }
}
